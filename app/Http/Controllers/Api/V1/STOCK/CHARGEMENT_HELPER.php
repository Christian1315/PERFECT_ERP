<?php

namespace App\Http\Controllers\Api\V1\STOCK;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\Chargement;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use PDF;

class CHARGEMENT_HELPER extends BASE_HELPER
{
    ##========CHARGEMENT VALIDATION =======##
    static function chargement_rules(): array
    {
        return [
            'product' => ['required', "integer"],
            'qty' => ['required', "numeric"],
            'immatriculation' => ['required'],
            'driver_identification' => ["required"],
            'destination' => ["required"],
            'emetteur' => ["required"],
        ];
    }

    static function chargement_messages(): array
    {
        return [
            'product.required' => 'Veuillez préciser le produit à charger!',
            'product.integer' => 'Ce champ doit être un entier!',


            'qty.required' => 'La quantité du produis est réquise!',
            'qty.integer' => 'Ce champ doit être un entier',

            'immatriculation.required' => 'Précisez l\'immatriculation du chargement!',
            'driver_identification.required' => 'Le numéro d\'identification du chargement est réquis!',

            'destination.required' => 'La destination du chargement est réquis!',
            'emetteur.required' => "Veuillez préciser l'emetteur!",
        ];
    }

    static function Chargement_Validator($formDatas)
    {
        $rules = self::chargement_rules();
        $messages = self::chargement_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###_____
    static function chargement_list_rules(): array
    {
        return [
            'chargements' => ['required'],
        ];
    }

    static function chargement_list_messages(): array
    {
        return [
            'orders.required' => 'Ce champ *orders* est réquis!',
            // 'orders.array' => 'Ce champ *orders* doit être un tableau!',
        ];
    }

    static function Chargement_list_Validator($formDatas)
    {
        $rules = self::chargement_list_rules();
        $messages = self::chargement_list_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    static function createChargement($request)
    {
        $formData = $request->all();
        $user = request()->user();

        ##___
        $product = Product::find($formData["product"]);
        if (!$product) {
            return self::sendError("Ce produit n'existe pas!", 404);
        }

        ###___
        $formData["owner"] = $user->id;
        $chargement = Chargement::create($formData);
        return self::sendResponse($chargement, 'Chargement éffectué avec succès!');
    }

    static function getChargements()
    {
        $user = request()->user();
        $chargements = [];
        if ($user->is_super_admin) {
            $chargements =  Chargement::with(["owner", "product"])->orderBy("id", "desc")->get();
        } else {
            $chargements =  Chargement::with(["owner", "product"])->where(["owner" => $user->id])->orderBy("id", "desc")->get();
        }
        return self::sendResponse($chargements, 'Tout les Chargements récupérés avec succès!!');
    }

    static function retrieveChargement($id)
    {
        $user = request()->user();
        $chargement = null;
        if ($user->is_super_admin) {
            $chargement = Chargement::with(["owner", "product"])->find($id);
        } else {
            $chargement = Chargement::with(["owner", "product"])->where(["owner" => $user->id])->find($id);
        }

        return self::sendResponse($chargement, "Chargement récupéré avec succès:!!");
    }

    static function updateChargement($request, $id)
    {
        $formData = $request->all();
        $user = request()->user();

        $chargement = Chargement::where(["visible" => 1])->find($id);
        if (!$chargement) {
            return self::sendError("Ce Chargement n'existe pas!", 404);
        }

        if ($chargement->owner != $user->id) {
            return self::sendError("Ce Chargement ne vous appartient pas!", 404);
        }

        if ($request->get("product")) {
            $product = Product::where(["visible" => 1])->find($request->get("product"));

            if (!$product) {
                return self::sendError("Ce produit n'existe pas!", 404);
            }
        }

        $chargement->update($formData);
        return self::sendResponse($chargement, "Chargement modifié avec succès:!!");
    }

    static function ChargementDelete($id)
    {
        $user = request()->user();
        $chargement = Chargement::where(["visible" => 1])->find($id);

        if (!$chargement) {
            return self::sendError("Ce Chargement n'existe pas!", 404);
        }

        if ($chargement->owner != $user->id) {
            return self::sendError("Ce Chargement ne vous appartient pas!", 404);
        }

        ###____
        $chargement->visible = 0;
        $chargement->deleted_at = now();
        $chargement->save();
        return self::sendResponse($chargement, 'Ce Chargement a été supprimé avec succès!');
    }

    static function generateChargementList($request)
    {
        $chargement = $request->get("chargements"); ###on recupère tout les chargements
        $chargement_ids = explode(",", $chargement);

        $chargementLists = [];
        $qty_array = [];

        ##__VERIFIONS D'ABORD SI LES CHARGEMENTS CHOISI EXISTENT OU PAS
        foreach ($chargement_ids as $order_id) {
            $chargement = Chargement::find($order_id);
            if (!$chargement) {
                return self::sendError("Ce chargement d'ID << " . $order_id . " >> n'existe pas!", 404);
            }
        }

        ###___PASSONS A LA CONSTRUCTION DE LA VARIABLE *$orderLists*
        foreach ($chargement_ids as $chargement_id) {
            $chargement = Chargement::with(["product"])->find($chargement_id);
            array_push($chargementLists, $chargement);

            array_push($qty_array, $chargement->qty);
        }

        $now = Custom_Timestamp();
        $qty_somm = array_sum($qty_array);
        $list = PDF::loadView('chargementList', compact(["chargementLists", "qty_somm"]));
        $list->save(public_path("chargementLists/" . $now . ".pdf"));

        ###____
        $data["chargementList"] = asset("chargementLists/" . $now . ".pdf");
        return self::sendResponse($data, "Liste des ordres generées avec succès!");
    }
}
