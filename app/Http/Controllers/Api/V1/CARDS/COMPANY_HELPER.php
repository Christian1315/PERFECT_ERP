<?php

namespace App\Http\Controllers\Api\V1\CARDS;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\Company;
use Illuminate\Support\Facades\Validator;

class COMPANY_HELPER extends BASE_HELPER
{
    ##======== COMPANY VALIDATION =======##
    static function company_rules(): array
    {
        return [
            'ifu' => ['required'],
            'denomination' => ['required'],
            'form_juridique' => ['required'],
            'principal_activity' => ['required'],
            'activity_area' => ['required'],
            'creation_date' => ['required', 'date'],
            'phone' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'departement' => ["required"],
            'adresse' => ["required"],
            'rccm' => ["required"],
        ];
    }

    static function company_messages(): array
    {
        return [
            'ifu.required' => "L'ifu est réquis!",
            'denomination.required' => 'La denomination est réquise!',
            'form_juridique.required' => 'Veuillez préciser la forme juridique!',

            'principal_activity.required' => 'Veuillez préciser l\'activité principale!',
            'activity_area.required' => 'Veuillez préciser le secteur d\'activité!',

            'creation_date.required' => 'Veuillez préciser la date de création!',
            'creation_date.date' => "La date de création doit être de format date",

            'phone.required' => 'Le phone est réquis!',
            'phone.numeric' => 'Le phone doit être de format numéric!',

            'email.required' => 'Le mail est réquis!',
            'email.email' => 'Le format mail n\'est pas respecté!',

            'departement.required' => 'Le departement est réquis!',
            'adresse.required' => 'L\'adresse est réquis!',

            'rccm.required' => 'Le rccm est réquis!',
        ];
    }

    static function Company_Validator($formDatas)
    {
        $rules = self::company_rules();
        $messages = self::company_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }
    ###_____

    static function createCompany($request)
    {
        $formData = $request->all();
        $user = request()->user();
        ##__
        $formData["owner"] = $user->id;

        ####___TRAITEMENT DE L'IMAGE
        // $rccm = $request->file("rccm");
        // $rccm_name = $rccm->getClientOriginalName();

        // $rccm->move("rccms", $rccm_name);
        // $formData["rccm"] = asset("rccms/" . $rccm_name);

        ###____
        $company = Company::create($formData);

        ##__
        return self::sendResponse($company, 'Entreprise ajoutée avec succès!');
    }

    static function getCompanies()
    {
        $user = request()->user();
        $companies = [];
        if ($user->is_super_admin) {
            $companies =  Company::with(["owner", "consulars"])->orderBy("id", "desc")->get();
        } else {
            $companies =  Company::with(["owner", "consulars"])->where(["owner" => $user->id, "visible" => 1])->orderBy("id", "desc")->get();
        }
        return self::sendResponse($companies, 'Toutes les entreprises récupérées avec succès!!');
    }

    static function retrieveCompany($id)
    {
        $user = request()->user();
        $company = null;
        if ($user->is_super_admin) {
            $company = Company::with(["owner", "consulars"])->find($id);
        } else {
            $company = Company::with(["owner", "consulars"])->where(["owner" => $user->id, "visible" => 1])->find($id);
        }

        return self::sendResponse($company, "Entreprise récupérée avec succès:!!");
    }

    static function updateCompany($request, $id)
    {
        $formData = $request->all();
        $user = request()->user();

        $company = Company::where(["visible" => 1])->find($id);

        if (!$company) {
            return self::sendError("Cette entreprise n'existe pas!", 404);
        }

        if ($company->owner != $user->id) {
            return self::sendError("Cette entreprise ne vous appartient pas!", 404);
        }

        $company->update($formData);
        return self::sendResponse($company, "Entreprise modifiée avec succès:!!");
    }

    static function companyDelete($id)
    {
        $user = request()->user();
        $company = Company::where(["visible" => 1])->find($id);

        if (!$company) {
            return self::sendError("Cette entreprise n'existe pas!", 404);
        }

        if ($company->owner != $user->id) {
            return self::sendError("Cette entreprise ne vous appartient pas!", 404);
        }

        ###____
        $company->visible = 0;
        $company->deleted_at = now();
        $company->save();
        return self::sendResponse($company, 'Cette entreprise a été supprimée avec succès!');
    }
}
