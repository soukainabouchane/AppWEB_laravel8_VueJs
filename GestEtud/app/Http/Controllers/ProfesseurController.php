<?php

namespace App\Http\Controllers;
use App\Models\Professeur;

use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    function list_prof($id=null)
    {
        return $id?Professeur::find($id):Professeur::all();
    }
    function store(Request $request)
    {
      $data =  $request->validate([
        'nom'=>'required|string',
        'prenom'=>'required|string',
        'cin'=>'required|string',
        'sexe'=>'required|string',
        'civilite'=>'required|string',
        'situation_familiale'=>'required|string',
        'mail'=>'required|string',
        'date_naissance'=>'required|string',
        'pays'=>'required|string',
        'ville'=>'required|string',
        'nationalite'=>'required|string',
        'code_postal'=>'required|string',
        'tel_fixe'=>'required|string',
        'tel_portable'=>'required|string',
        'mot_de_passe'=>'required|string',
        'id_admin'=>'required|integer',
        'id_emp_temps'=>'required|integer',
        ]);
        $Professeur = Professeur::create($data);

        return response($Professeur,201);
    }
    function update(Request $request,Professeur $Professeur)
    {
      $data =  $request->validate([
        'nom'=>'required|string',
        'prenom'=>'required|string',
        'cin'=>'required|string',
        'sexe'=>'required|string',
        'civilite'=>'required|string',
        'situation_familiale'=>'required|string',
        'mail'=>'required|string',
        'date_naissance'=>'required|string',
        'pays'=>'required|string',
        'ville'=>'required|string',
        'nationalite'=>'required|string',
        'code_postal'=>'required|string',
        'tel_fixe'=>'required|string',
        'tel_portable'=>'required|string',
        'mot_de_passe'=>'required|string',
        'id_admin'=>'required|integer',
        'id_emp_temps'=>'required|integer',
        ]);
        $Professeur->update($data);

        return response($Professeur,200);
    }
    function destroy(Professeur $Professeur)
    {
      
        $Professeur->delete();

        return response('delete Professeur succes',200);
    }

}
