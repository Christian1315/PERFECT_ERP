<?php

namespace App\Http\Controllers\Api\V1\STOCK;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\ChargeOrder;
use App\Models\Logistique;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use PDF;

class CHARG_ORDER_HELPER extends BASE_HELPER
{
    ##======== ORDER CHARGE VALIDATION =======##
    static function order_charg_rules(): array
    {
        return [
            'transportor' => ['required'],
            'driver' => ['required'],
            'driver_permit_ref' => ['required'],
            'camion_number' => ["required"],
            'product_volume' => ["required"],
            'driver_phone' => ["required", "numeric"],
            'logistique' => ["required", "integer"],
        ];
    }

    static function order_charg_messages(): array
    {
        return [
            'transportor.required' => 'Le nom du transporteur est réquis!',
            'driver.required' => 'Le chauffeur est réquis!',

            'driver_permit_ref.numeric' => 'La référence du permit du chauffeur est réquis!',
            'camion_number.required' => 'Le numéro du camion est réquis!',
            'product_volume.required' => "Le volume du produit est réquis!",
            'driver_phone.required' => "Le phone du chauffeur est réquis!",

            'logistique.required' => "Veuillez préciser la logistique qui doit recevoir l'Ordre de commande",
            'logistique.integer' => "La champ logistique être un entier!",
        ];
    }

    static function Order_charg_Validator($formDatas)
    {
        $rules = self::order_charg_rules();
        $messages = self::order_charg_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }
    ###_____

    static function order_list_rules(): array
    {
        return [
            'orders' => ['required'],
        ];
    }

    static function order_list_messages(): array
    {
        return [
            'orders.required' => 'Ce champ *orders* est réquis!',
            // 'orders.array' => 'Ce champ *orders* doit être un tableau!',
        ];
    }

    static function Order_list_Validator($formDatas)
    {
        $rules = self::order_list_rules();
        $messages = self::order_list_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###___

    static function createOrderCharg($request)
    {
        $formData = $request->all();
        $user = request()->user();
        ##__
        $logistique = Logistique::find($formData["logistique"]);
        if (!$logistique) {
            return self::sendError("Cette logistique n'existe pas!", 404);
        }

        ###___
        $formData["owner"] = $user->id;
        $order_charg = ChargeOrder::create($formData);

        ###___ENVOIE DE NOTIFICATION AU LOGISTIQUE QUI REçOIS L'ORDRE DE CHARGEMENT
        $user_logistique = User::find($logistique->as_user);

        $sender_type = "";
        if (Is_User_A_Marketeur($user->id)) {
            $sender_type = "Marketeur";
        } else {
            # Quand il s'agit d'un administrateur
            $sender_type = "Admin";
        }
        $message = "Vous avez reçu un ordre de rechargement de la part du " . $sender_type . " <<" . $user->name . ">> .\t Voici ses coordonnées: \t Phone:: " . $user->phone . " \t Email:: " . $user->email;

        try {
            ###___
            Send_Notification(
                $user_logistique,
                "ORDRE DE RECHARGEMENT SUR PERFECT_ERP",
                $message
            );
        } catch (\Throwable $th) {
            //throw $th;
        }
        return self::sendResponse($order_charg, 'Ordre de chargement éffectué avec succès!');
    }

    static function getChargOrders()
    {
        $user = request()->user();
        $order_chargs = [];
        if ($user->is_super_admin) {
            $order_chargs =  ChargeOrder::with(["owner", "logistique"])->orderBy("id", "desc")->get();
        } else {
            $order_chargs =  ChargeOrder::with(["owner", "logistique"])->where(["owner" => $user->id])->orderBy("id", "desc")->get();
        }
        return self::sendResponse($order_chargs, 'Tout les Ordre de chargement récupérés avec succès!!');
    }

    static function retrieveChargOrder($id)
    {
        $user = request()->user();
        $order_charg = null;
        if ($user->is_super_admin) {
            $order_charg = ChargeOrder::with(["owner", "logistique"])->find($id);
        } else {
            $order_charg = ChargeOrder::with(["owner", "logistique"])->where(["owner" => $user->id])->find($id);
        }

        return self::sendResponse($order_charg, "Ordre de chargement récupéré avec succès:!!");
    }

    static function updateChargOrder($request, $id)
    {
        $formData = $request->all();
        $user = request()->user();

        $order_charg = ChargeOrder::where(["visible" => 1])->find($id);

        if (!$order_charg) {
            return self::sendError("Cet Ordre de rechargement n'existe pas!", 404);
        }

        if ($order_charg->owner != $user->id) {
            return self::sendError("Cet Ordre de rechargement ne vous appartient pas!", 404);
        }

        if ($request->get("logistique")) {
            $logistique = Logistique::where(["visible" => 1])->find($request->get("logistique"));

            if (!$logistique) {
                return self::sendError("Cette logistique n'existe pas!", 404);
            }
        }

        $order_charg->update($formData);
        return self::sendResponse($order_charg, "Ordre de rechargement récupéré avec succès:!!");
    }

    static function ChargOrderDelete($id)
    {
        $user = request()->user();
        $order_charg = ChargeOrder::where(["visible" => 1])->find($id);

        if (!$order_charg) {
            return self::sendError("Cet Ordre de rechargement n'existe pas!", 404);
        }

        if ($order_charg->owner != $user->id) {
            return self::sendError("Cet Ordre de rechargement ne vous appartient pas!", 404);
        }

        ###____
        $order_charg->visible = 0;
        $order_charg->deleted_at = now();
        $order_charg->save();
        return self::sendResponse($order_charg, 'Cet Ordre de rechargement a été supprimé avec succès!');
    }

    static function generateOrderList($request)
    {
        $orders = $request->get("orders"); ###on recupère tout les ordres
        $orders_ids = explode(",", $orders);

        $orderLists = [];
        ##__VERIFIONS D'ABORD SI LES ORDERS CHOISI EXISTENT OU PAS
        foreach ($orders_ids as $order_id) {
            $order = ChargeOrder::find($order_id);
            if (!$order) {
                return self::sendError("Ce ordre de chargement d'ID << " . $order_id . " >> n'existe pas!", 404);
            }
        }

        ###___PASSONS A LA CONSTRUCTION DE LA VARIABLE *$orderLists*
        foreach ($orders_ids as $order_id) {
            $order = ChargeOrder::find($order_id);
            array_push($orderLists, $order);
        }

        $now = Custom_Timestamp();
        $list = PDF::loadView('orderList', compact(["orderLists"]));
        $list->save(public_path("orderLists/" . $now . ".pdf"));

        ###____
        $data["orderList"] = asset("orderLists/" . $now . ".pdf");;
        return self::sendResponse($data, "Liste des ordres generées avec succès!");
    }
}
