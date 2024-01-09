<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\CardType;
use App\Models\Country;
use App\Models\Departement;
use App\Models\Locataire;
use Illuminate\Support\Facades\Validator;

class LOCATAIRE_HELPER extends BASE_HELPER
{
    ##======== LOCATAIRE VALIDATION =======##

    static function locataire_rules(): array
    {
        return [
            'name' => ['required'],
            'prenom' => ['required'],
            'email' => ['required', "email"],
            'sexe' => ['required'],
            'phone' => ['required', "numeric"],
            'piece_number' => ['required'],
            'mandate_contrat' => ['required', "file"],
            'comments' => ['required'],
            'adresse' => ['required'],
            'card_id' => ['required'],
            'card_type' => ['required', "integer"],
            'departement' => ['required', "integer"],
            'country' => ['required', "integer"],
        ];
    }

    static function locataire_messages(): array
    {
        return [
            'name.required' => 'Le nom du locataire est réquis!',
            'prenom.required' => "Le prénom est réquis!",
            'email.required' => "Le mail est réquis!",
            'email.email' => "Ce champ doit être de format mail",
            'sexe.required' => "Le sexe est réquis",
            'phone.required' => "Le phone est réquis",
            'phone.numeric' => "Le phone doit être de type numéric",
            'piece_number.required' => "Le numéro de la pièce est réquise",
            'mandate_contrat.required' => "Le contrat du mandat est réquis",
            'mandate_contrat.file' => "Le contrat du mandat doit être un fichier",
            'comments.required' => "Le commentaire est réquis",
            'adresse.required' => "L'adresse est réquis!",
            'card_id.adresse' => "L'ID de la carte est réquis",
            'card_type.required' => "Le type de la carte est réquis",
            'card_type.integer' => 'Le type de la carte doit être de type entier!',

            'departement.required' => "Le departement est réquis",
            'departement.integer' => "Ce champ doit être de type entier",
            'country.required' => "Le pays est réquis",
            'country.integer' => "Ce champ doit être de type entier",
        ];
    }

    static function Locataire_Validator($formDatas)
    {
        $rules = self::locataire_rules();
        $messages = self::locataire_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###___
    static function addLocataire($request)
    {
        $formData = $request->all();
        $user = request()->user();

        ###___TRAITEMENT DES DATAS
        $cardType = CardType::find($formData["card_type"]);
        $departement = Departement::find($formData["departement"]);
        $country = Country::find($formData["country"]);

        if (!$cardType) {
            return self::sendError("Ce Type de carte n'existe pas!", 404);
        }

        if (!$departement) {
            return self::sendError("Ce département n'existe pas!", 404);
        }

        if (!$country) {
            return self::sendError("Ce pays n'existe pas!", 404);
        }

        ##___TRAITEMENT DE L'IMAGE
        $img = $request->file("mandate_contrat");
        $imgName = $img->getClientOriginalName();
        $img->move("mandate_contrats", $imgName);

        #ENREGISTREMENT DU LOCATAIRE DANS LA DB
        $formData["owner"] = $user->id;
        $formData["mandate_contrat"] = asset("mandate_contrats/" . $imgName);

        $locataire = Locataire::create($formData);
        return self::sendResponse($locataire, "Locataire ajouté avec succès!!");
    }

    static function getLocataires()
    {
        $user = request()->user();
        $locataires = Locataire::where(["visible" => 1])->with(["Owner", "CardType", "CardType", "Departement", "Country"])->get();
        return self::sendResponse($locataires, 'Tout les locataires récupérés avec succès!!');
    }

    static function _retrieveLocataire($id)
    {
        $user = request()->user();
        $locataire = Locataire::where(["visible" => 1])->with(["Owner", "CardType", "CardType", "Departement", "Country"])->find($id);
        if (!$locataire) {
            return self::sendError("Ce locataire n'existe pas!", 404);
        }
        return self::sendResponse($locataire, "Locataire récupéré avec succès:!!");
    }

    static function _updateLocataire($request, $id)
    {
        $user = request()->user();
        $formData = $request->all();
        $locataire = Locataire::where(["visible" => 1])->find($id);
        if (!$locataire) {
            return self::sendError("Ce locataire n'existe pas!", 404);
        };

        if ($locataire->owner != $user->id) {
            return self::sendError("Ce locataire ne vous appartient pas!", 404);
        }

        ####____TRAITEMENT DU TYPE DE CARTE
        if ($request->get("card_type")) {
            $type = CardType::find($request->get("card_type"));

            if (!$type) {
                return self::sendError("Ce type de carte n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DU DEPARTEMENT
        if ($request->get("departement")) {
            $departement = Departement::find($request->get("departement"));

            if (!$departement) {
                return self::sendError("Ce departement n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DU COUNTRY
        if ($request->get("country")) {
            $country = Country::find($request->get("country"));
            if (!$country) {
                return self::sendError("Ce pays n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DE L'IMAGE
        if ($request->file("mandate_contrat")) {
            $img = $request->file("mandate_contrat");
            $imgName = $img->getClientOriginalName();
            $img->move("mandate_contrats", $imgName);
            $formData["mandate_contrat"] = asset("mandate_contrats/" . $imgName);
        }

        $locataire->update($formData);
        return self::sendResponse($locataire, 'Ce locataire a été modifié avec succès!');
    }

    static function locataireDelete($id)
    {
        $user = request()->user();
        $locataire = Locataire::where(["visible" => 1])->find($id);
        if (!$locataire) {
            return self::sendError("Ce locataire n'existe pas!", 404);
        };

        if (!Is_User_An_Admin($user->id)) {
            if ($locataire->owner != $user->id) {
                return self::sendError("Ce locataire ne vous appartient pas!", 404);
            }
        }

        $locataire->visible = 0;
        $locataire->delete_at = now();
        $locataire->save();
        return self::sendResponse($locataire, 'Ce locataire a été supprimé avec succès!');
    }
}
