<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    // CRUD
    
    function list_etudiant($id=null)
    {
        return $id?Etudiant::find($id):Etudiant::all();
    }
    function index()
    {
        return Etudiant::all();
    }
    function store(Request $request)
    {
      $data =  $request->validate([
        'nom'=>'required|string',
        'prenom'=>'required|string',
        'sexe'=>'required|string',
        'civilite'=>'required|string',
        'situation_familiale'=>'required|string',
        'date_naissance'=>'required|string',
        'ville_nais'=>'required|string',
        'nationalite'=>'required|string',
        'pays_nais'=>'required|string',
        'adresse'=>'required|string',
        'tel_fixe'=>'required|string',
        'tel_portable'=>'required|string',
        'cin'=>'required|string',
        'cne'=>'required|string',
        'email'=>'required|string',
        'password'=>'required|string',
        'id_admin'=>'required|integer',
        'id_pfe'=>'required|integer',
        'id_emp'=>'required|integer',
        ]);
        $Etudiant = Etudiant::create($data);

        return response($Etudiant,201);
    }
    function update(Request $request,Etudiant $Etudiant)
    {
      $data =  $request->validate([
        'nom'=>'required|string',
        'prenom'=>'required|string',
        'sexe'=>'required|string',
        'civilite'=>'required|string',
        'situation_familiale'=>'required|string',
        'date_naissance'=>'required|string',
        'ville_nais'=>'required|string',
        'nationalite'=>'required|string',
        'pays_nais'=>'required|string',
        'adresse'=>'required|string',
        'tel_fixe'=>'required|string',
        'tel_portable'=>'required|string',
        'cin'=>'required|string',
        'cne'=>'required|string',
        'email'=>'required|string',
        'password'=>'required|string',
        'id_admin'=>'required|integer',
        'id_pfe'=>'required|integer',
        'id_emp'=>'required|integer',
        ]);
        $Etudiant->update($data);

        return response($Etudiant,200);
    }
    function destroy(Etudiant $Etudiant)
    {
      
        $Etudiant->delete();

        return response('delete to Etudiant',200);
    }

    
}
