<?php

namespace App\Http\Controllers\Api\V1\MINISTERS;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\Repertory;
use Illuminate\Support\Facades\Validator;
use QrCode;
use PDF;

class REPERTORY_HELPER extends BASE_HELPER
{
    ##======== REPERTORY VALIDATION =======##
    static function repertory_rules(): array
    {
        return [
            'firstname' => ['required'],
            'lastname' => ['required'],
            'ministry' => ['required'],
            'denomination' => ["required"],
            'residence' => ["required"],
            'commune' => ["required"],
            'contact' => ["required", "numeric"],
        ];
    }

    static function repertory_messages(): array
    {
        return [
            'firstname.required' => 'Le firstname est réquis!',
            'lastname.required' => 'Le lastname est réquis!',

            'ministry.required' => 'Le ministère est réquis!',
            'denomination.required' => "La denominantion est réquise!",
            'residence.required' => "La residence est réquise!",
            'commune.required' => "La commune est réquise!",

            'contact.required' => "Le contact est réquis!",
        ];
    }

    static function Repertory_Validator($formDatas)
    {
        $rules = self::repertory_rules();
        $messages = self::repertory_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###___

    static function createRepertory($request)
    {
        $formData = $request->all();
        $user = request()->user();
        ##__
        $formData["owner"] = $user->id;
        // return $formData;
        $repertory = Repertory::create($formData);

        ##__
        return self::sendResponse($repertory, 'Repertoire ajouté avec succès!');
    }

    static function getRepertories()
    {
        $user = request()->user();
        $repertory = [];
        if ($user->is_super_admin) {
            $repertory =  Repertory::with(["owner"])->orderBy("id", "desc")->get();
        } else {
            $repertory =  Repertory::with(["owner"])->where(["owner" => $user->id])->orderBy("id", "desc")->get();
        }
        return self::sendResponse($repertory, 'Tout les repertoires récupérés avec succès!!');
    }

    static function retrieveRepertory($id)
    {
        // $user = request()->user();
        // $repertory = null;
        // if ($user->is_super_admin) {
        //     $repertory = Repertory::with(["owner"])->find($id);
        // } else {
        $repertory = Repertory::with(["owner"])->find($id);
        // }

        return self::sendResponse($repertory, "Repertoire récupéré avec succès:!!");
    }

    static function updateRepertory($request, $id)
    {
        $formData = $request->all();
        $user = request()->user();

        $repertory = Repertory::where(["visible" => 1])->find($id);

        if (!$repertory) {
            return self::sendError("Ce repertoire n'existe pas!", 404);
        }

        if ($repertory->owner != $user->id) {
            return self::sendError("Ce repertoire ne vous appartient pas!", 404);
        }

        if ($request->get("present")) {
            $present = $request->get("present");

            $validator = Validator::make(
                $formData,
                [
                    "present" => "boolean",
                ],
                [
                    "present.boolean" => "L'attribut *present* doit être un booléen!",
                ]
            );

            if ($validator->fails()) {
                return self::sendError($validator->errors(), 505);
            }
        }

        $repertory->update($formData);
        return self::sendResponse($repertory, "Repertoire récupéré avec succès:!!");
    }

    static function repertoryDelete($id)
    {
        $user = request()->user();
        $repertory = Repertory::where(["visible" => 1])->find($id);

        if (!$repertory) {
            return self::sendError("Ce Repertorire n'existe pas!", 404);
        }

        if ($repertory->owner != $user->id) {
            return self::sendError("Ce repertoire ne vous appartient pas!", 404);
        }

        ###____
        $repertory->visible = 0;
        $repertory->deleted_at = now();
        $repertory->save();
        return self::sendResponse($repertory, 'Ce repertoire a été supprimé avec succès!');
    }

    static function generateQr($request, $id)
    {
        $repertory = Repertory::find($id);
        if (!$repertory) {
            return self::sendError("Ce repertoire n'existe pas!", 404);
        }
        ###___

        $qrcode = "repertory_" . $id . ".png";
        // QrCode::format("png")->size(100)->backgroundColor(32, 135, 131, 1)->merge("logo.png", .3, true)->generate("https://manager.perfect-erp.com/v1/repertory/$id/retrieve", "qrcodes/" . $qrcode);
        QrCode::format("png")->size(100)->generate("https://manager.perfect-erp.com/v1/repertory/$id/show", "qrcodes/" . $qrcode);


        $repertory->qr_code = asset("qrcodes/" . $qrcode);
        $repertory->save();

        ##___
        return self::sendResponse($repertory, "Code Qr généré avec succès!!");
    }

    static function generateBadge($request, $id)
    {
        $repertory = Repertory::where(["visible" => 1])->find($id);
        if (!$repertory) {
            return self::sendError("Ce repertoire n'existe pas!", 404);
        }

        if (!$repertory->qr_code) {
            return self::sendError("Ce contact ne dispose pas de code Qr! Vous ne pouvez donc pas lui générer un badge", 505);
        }

        ###___
        // $reference = Custom_Timestamp();
        // $badge = PDF::loadView('badge', compact(["repertory"]));
        // $badge->save(public_path("badges/repertory_$id.pdf"));
        ###____

        // $repertory->badge = asset("badges/repertory_$id.pdf");
        // $repertory->save();
        $repertory["htmlbadge_url"] = env("APP_URL") . "/$id/badge";
        ##___
        return self::sendResponse($repertory, "Badge generé avec succès!!");
    }
}
