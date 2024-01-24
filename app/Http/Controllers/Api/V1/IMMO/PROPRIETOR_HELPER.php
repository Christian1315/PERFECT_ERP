<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\CardType;
use App\Models\City;
use App\Models\Client;
use App\Models\Country;
use App\Models\Proprietor;
use Illuminate\Support\Facades\Validator;

class PROPRIETOR_HELPER extends BASE_HELPER
{
    ##======== PROPRIETOR VALIDATION =======##
    static function proprietor_rules(): array
    {
        return [
            'firstname' => ['required'],
            'lastname' => ['required'],
            'phone' => ['required', "numeric"],
            'email' => ['required', "email"],
            'sexe' => ['required'],
            'piece_number' => ['required'],
            // 'mandate_contrat' => ['required', "file"],
            'comments' => ['required'],
            'adresse' => ['required'],

            'city' => ['required', 'integer'],
            'country' => ['required', 'integer'],
            'card_type' => ['required', 'integer'],
        ];
    }

    static function proprietor_messages(): array
    {
        return [
            'firstname.required' => 'Veuillez précisez le prénom!',
            'lastname.required' => 'Veuillez précisez le nom!',
            'phone.required' => 'Veuillez précisez le phone!',
            'email.required' => 'Veuillez précisez le mail!',
            'sexe.required' => 'Veuillez précisez le sexe!',
            'piece_number.required' => 'Veuillez précisez le numéro de la pièce!',
            // 'mandate_contrat.required' => 'Veuillez précisez le mandat du contrat!',
            'comments.required' => 'Veuillez précisez un commantaire!',
            'adresse.required' => 'Veuillez précisez l\'adresse!',
            'city.required' => 'Veuillez précisez la ville!',
            'country.required' => 'Veuillez précisez le pays!',
            'card_type.required' => 'Veuillez précisez le type de carte!',

            'city.integer' => 'Ce champ doit être de type entier!',
            'country.integer' => 'Ce champ doit doit être de type entier!',
            'card_type.integer' => 'Ce champ doit doit être de type entier!',


            'phone.numeric' => 'Ce champ doit doit être de type numeric!',
            'email.email' => 'Ce champ doit doit être de type mail!',
            // 'mandate_contrat.file' => 'Ce champ doit doit être un fichier!',
        ];
    }

    static function Proprietor_Validator($formDatas)
    {
        $rules = self::proprietor_rules();
        $messages = self::proprietor_messages();
        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###___
    static function addProprietor($request)
    {
        $formData = $request->all();
        $user = request()->user();

        ###___
        $city = City::find($formData["city"]);
        $country = Country::find($formData["country"]);
        $card_type = CardType::find($formData["card_type"]);

        if (!$city) {
            return self::sendError("Cette ville n'existe pas", 404);
        }
        if (!$country) {
            return self::sendError("Ce pays n'existe pas", 404);
        }
        if (!$card_type) {
            return self::sendError("Ce type de carte n'existe pas", 404);
        }

        ###__TRAITEMENT DE L'IMAGE
        if ($request->file("mandate_contrat")) {
            $mandate_contrat = $request->file("mandate_contrat");
            $file_name = $mandate_contrat->getClientOriginalName();
            $mandate_contrat->move("contrats", $file_name);
    
            #ENREGISTREMENT DE LA CARTE DANS LA DB
            $formData["owner"] = $user->id;
            $formData["mandate_contrat"] = asset("contrats/" . $file_name);
        }

        $proprietor = Proprietor::create($formData);

        ###___CREATION DU CLIENT___###
        $client = new Client();
        $client->type = 1;
        $client->city = $formData["city"];
        $client->phone = $formData["phone"];
        $client->email = $formData["email"];
        $client->name = $formData["firstname"] . " " . $formData["lastname"];
        $client->sexe = $formData["sexe"];
        $client->is_proprietor = true;
        $client->comments = $formData["comments"];
        $client->save();
        ###___FIN CREATION DU CLIENT___###

        return self::sendResponse($proprietor, "Proprietaire ajouté avec succès!!");
    }

    static function getProprietor()
    {
        $user = request()->user();
        $proprietors = Proprietor::where(["visible" => 1])->with(["Owner", "City", "Country", "TypeCard", "Houses"])->get();
        return self::sendResponse($proprietors, 'Tout les proprietaires récupérés avec succès!!');
    }

    static function _retrieveProprietor($id)
    {
        $user = request()->user();
        $proprietor = Proprietor::where(["visible" => 1])->with(["Owner", "City", "Country", "TypeCard", "Houses"])->find($id);
        if (!$proprietor) {
            return self::sendError("Ce proprietaire de maison n'existe pas!", 404);
        }
        return self::sendResponse($proprietor, "Proprietaire récupéré avec succès:!!");
    }

    static function _updateProprietor($request, $id)
    {
        $user = request()->user();
        $formData = $request->all();
        $proprietor = Proprietor::where(["visible" => 1])->find($id);

        if (!$proprietor) {
            return self::sendError("Ce Proprietaire n'existe pas!", 404);
        };

        if ($proprietor->owner != $user->id) {
            return self::sendError("Ce Proprietaire ne vous appartient pas!", 404);
        }


        if ($request->get("city")) {
            $city = City::find($request->get("city"));
            if (!$city) {
                return self::sendError("Cette ville n'existe pas!", 404);
            }
        }

        if ($request->get("country")) {
            $country = Country::find($request->get("country"));
            if (!$country) {
                return self::sendError("Ce pays n'existe pas!", 404);
            }
        }

        if ($request->get("card_type")) {
            $card_type = CardType::find($request->get("card_type"));
            if (!$card_type) {
                return self::sendError("Ce type de carte n'existe pas!", 404);
            }
        }

        if ($request->file("mandate_contrat")) {
            $mandate_contrat = $request->file("mandate_contrat");
            $file_name = $mandate_contrat->getClientOriginalName();
            $mandate_contrat->move("contrats", $file_name);

            $formData["mandate_contrat"] = asset("contrats/" . $file_name);
        }

        $proprietor->update($formData);
        return self::sendResponse($proprietor, 'Ce Proprietaire a été modifiée avec succès!');
    }

    static function proprietorDelete($id)
    {
        $user = request()->user();
        $proprietor = Proprietor::where(["visible" => 1])->find($id);
        if (!$proprietor) {
            return self::sendError("Ce Proprietaire n'existe pas!", 404);
        };

        if (!Is_User_An_Admin($user->id)) {
            if ($proprietor->owner != $user->id) {
                return self::sendError("Ce Proprietaire ne vous appartient pas!", 404);
            }
        }

        $proprietor->visible = 0;
        $proprietor->delete_at = now();
        $proprietor->save();
        return self::sendResponse($proprietor, 'Ce Proprietaire a été supprimée avec succès!');
    }
}
