<?php

namespace App\Http\Controllers\Api\V1\CARDS;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\Company;
use App\Models\CompanyConsular;
use App\Models\ConsularPoste;
use App\Models\ElectedConsular;
use App\Models\Fonction;
use App\Models\Mandate;
use App\Models\Poste;
use Illuminate\Support\Facades\Validator;

class CONSULAR_HELPER extends BASE_HELPER
{
    ##======== CONSULAR VALIDATION =======##
    static function consular_rules(): array
    {
        return [
            'ifu' => ['required'],
            'npi' => ['required'],
            'firstname' => ['required'],
            'lastname' => ['required'],

            'phone' => ['required', "numeric"],
            'email' => ['required', "email"],

            'birth_date' => ['required', "date"],
            'place_of_birth' => ['required'],
            'country_of_birth' => ['required'],
            'nationnality' => ['required'],

            'sexe' => ['required'],
            'photo' => ['required', "file"],
            'validated_date' => ["required", "date"],
        ];
    }

    static function consular_messages(): array
    {
        return [
            'ifu.required' => "L'ifu est réquis!",
            'npi.required' => "L'npi est réquis!",
            'firstname.required' => 'Votre prénom est réquis!',
            'lastname.required' => 'Votre nom est réquis!',

            'sexe.required' => 'Veuillez préciser le sexe!',

            'photo.required' => 'Veuillez choisir une photo',
            'photo.file' => 'Ce champ doit être du format fichier',

            'validated_date.required' => "La date de validation est réquise!",
            'validated_date.date' => "La date de création doit être de format date",

            'phone.required' => 'Le phone est réquis!',
            'phone.numeric' => 'Le phone doit être de format numéric!',

            'email.required' => "Le mail est réquis",
            'email.email' => "Le mail doit être de format mail!",

            'birth_date.required' => "La date de naissance est réquise!",
            'birth_date.date' => "Ce champ doit être de format date",

            'place_of_birth.required' => "Le lieu de naissance est réquis!",
            'country_of_birth.required' => "Le pays de naissance est réquis!",
            'nationnality.required' => "La nationnalité est réquise!",
        ];
    }

    static function Consular_Validator($formDatas)
    {
        $rules = self::consular_rules();
        $messages = self::consular_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }
    ###_____

    ##======== AFFECT ELECTED CONSULAR TO COMPANY VALIDATION =======##
    static function affect_to_company_rules(): array
    {
        return [
            'company_id' => ['required', 'integer'],
            'fonction_id' => ['required', 'integer'],
            // 'elected_consular' => ['required', 'integer'],
            'mandate_id' => ['required', 'integer'],
        ];
    }

    static function affect_to_company_messages(): array
    {
        return [
            'fonction_id.required' => "Veuillez précisez la fonction atttribuée",
            'fonction_id.integer' => "Le champ *fonction* doit être un entier!",

            // 'elected_consular.required' => 'Le consulaire doit est requis!',
            // 'elected_consular.integer' => 'Le consulaire doit être un entier!',

            'mandate.required' => 'La mandature est réquise!',
            'mandate_id.integer' => 'La mandate doit être un entier!',

            'company_id.required' => "L'entreprise est réquise!",
            'company_id.integer' => "L'entreprise doit être un entier!",
        ];
    }

    static function Affect_to_company_Validator($formDatas)
    {
        $rules = self::affect_to_company_rules();
        $messages = self::affect_to_company_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###_____
    ##======== AFFECT ELECTED CONSULAR TO A POSTE VALIDATION =======##
    static function affect_to_poste_rules(): array
    {
        return [
            'poste_id' => ['required', 'integer'],
            'mandate_id' => ['required', 'integer'],
        ];
    }

    static function affect_to_poste_messages(): array
    {
        return [
            'poste_id.required' => "Veuillez précisez le poste à atttribuer",
            'poste_id.integer' => "Le champ *poste* doit être un entier!",

            'mandate.required' => 'La mandature est réquise!',
            'mandate_id.integer' => 'La mandate doit être un entier!',
        ];
    }

    static function Affect_to_poste_Validator($formDatas)
    {
        $rules = self::affect_to_poste_rules();
        $messages = self::affect_to_poste_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###___

    static function createConsular($request)
    {
        $formData = $request->all();
        $user = request()->user();
        ##__
        $formData["owner"] = $user->id;

        ####___TRAITEMENT DE L'IMAGE
        $photo = $request->file("photo");
        $photo_name = $photo->getClientOriginalName();

        $photo->move("/rccms", $photo_name);
        $formData["photo"] = asset("elu_consulaires/" . $photo_name);

        ###____
        $company = ElectedConsular::create($formData);

        ##__
        return self::sendResponse($company, 'Elu consulaire ajouté avec succès!');
    }

    static function getConsulars()
    {
        $user = request()->user();
        $consulars = [];
        if ($user->is_super_admin) {
            $consulars =  ElectedConsular::with(["owner", "company_fonction_mandate", "postes"])->orderBy("id", "desc")->get();
        } else {
            $consulars =  ElectedConsular::with(["owner", "company_fonction_mandate", "postes"])->where(["owner" => $user->id, "visible" => 1])->orderBy("id", "desc")->get();
        }
        return self::sendResponse($consulars, 'Tout les elus consulaires récupérées avec succès!!');
    }

    static function retrieveConsular($id)
    {
        $user = request()->user();
        $consular = null;
        if ($user->is_super_admin) {
            $consular = ElectedConsular::with(["owner", "company_fonction_mandate", "postes"])->find($id);
        } else {
            $consular = ElectedConsular::with(["owner", "company_fonction_mandate", "postes"])->where(["owner" => $user->id, "visible" => 1])->find($id);
        }

        return self::sendResponse($consular, "Elu consulaire récupéré avec succès:!!");
    }

    static function updateConsular($request, $id)
    {
        $formData = $request->all();
        $user = request()->user();

        $consular = ElectedConsular::where(["visible" => 1])->find($id);

        if (!$consular) {
            return self::sendError("Cet élu consulaire n'existe pas!", 404);
        }

        if ($consular->owner != $user->id) {
            return self::sendError("Cet élu consulaire ne vous appartient pas!", 404);
        }

        $consular->update($formData);
        return self::sendResponse($consular, "Elu consulaire modifié avec succès:!!");
    }

    static function ConsularDelete($id)
    {
        $user = request()->user();
        $consular = ElectedConsular::where(["visible" => 1])->find($id);

        if (!$consular) {
            return self::sendError("Cet Elu consulaire n'existe pas!", 404);
        }

        if ($consular->owner != $user->id) {
            return self::sendError("Cet Elu consulaire ne vous appartient pas!", 404);
        }

        ###____
        $consular->visible = 0;
        $consular->deleted_at = now();
        $consular->save();
        return self::sendResponse($consular, 'Cet Elu consulaire a été supprimée avec succès!');
    }

    ###___AFFECTER UN ELU CONSULAIRE A UNE ENTREPRISE
    function _affect_to_company($request, $id)
    {
        $formData = $request->all();
        $user = request()->user();

        ##___
        $electedConsular = ElectedConsular::where(["visible" => 1])->find($id);
        if (!$electedConsular) {
            return self::sendError("Cet elu consulaire n'existe pas!", 404);
        }

        $company = Company::where(["visible" => 1])->find($formData["company_id"]);
        if (!$company) {
            return self::sendError("Cette entreprise n'existe pas!", 404);
        }

        $mandate = Mandate::where(["visible" => 1])->find($formData["mandate_id"]);
        if (!$mandate) {
            return self::sendError("Cette mandature n'existe pas!", 404);
        }

        $fonction = Fonction::find($formData["fonction_id"]);
        if (!$fonction) {
            return self::sendError("Cette fonction n'existe pas!", 404);
        }

        // return "gogo";
        $is_this_affectation_existe = CompanyConsular::where([
            "elected_consular" => $id,
            "company_id" => $formData["company_id"],
            "fonction_id" => $formData["fonction_id"],
            "mandate_id" => $formData["mandate_id"],
        ])->first();

        if ($is_this_affectation_existe) {
            return self::sendError("Cette affectation existe déjà", 505);
        }

        ##___AFFECTATION
        $formData["elected_consular"] = $id;
        $affectation = CompanyConsular::create($formData);

        return self::sendResponse($affectation, "Affectation effectuée avec succès!");
    }

    ###___AFFECTER UN ELU CONSULAIRE A UN POSTE
    function _affect_to_poste($request, $id)
    {
        $formData = $request->all();
        $user = request()->user();
        ##____
        $electedConsular = ElectedConsular::where(["visible" => 1])->find($id);
        if (!$electedConsular) {
            return self::sendError("Cet elu consulaire n'existe pas!", 404);
        }

        $mandate = Mandate::where(["visible" => 1])->find($formData["mandate_id"]);
        if (!$mandate) {
            return self::sendError("Cette mandature n'existe pas!", 404);
        }

        $poste = Poste::find($formData["poste_id"]);
        if (!$poste) {
            return self::sendError("Ce poste n'existe pas!", 404);
        }

        // return $electedConsular;
        $is_this_affectation_existe = ConsularPoste::where([
            "elected_consular" => $id,
            "mandate_id" => $formData["mandate_id"],
            "poste_id" => $formData["poste_id"],
        ])->first();

        // return $is_this_affectation_existe;
        if ($is_this_affectation_existe) {
            return self::sendError("Cette affectation existe déjà", 505);
        }

        ##___AFFECTATION
        $formData["elected_consular"] = $id;
        $affectation = ConsularPoste::create($formData);

        return self::sendResponse($affectation, "Affectation effectuée avec succès!");
    }
}
