<?php

namespace App\Http\Controllers;
use App\Models\EmploiTemps;

use Illuminate\Http\Request;

class EmploiTempsController extends Controller
{
    function list_emploi_temps($id=null)
    {
        return $id?EmploiTemps::find($id):EmploiTemps::all();
    }
    function index()
    {
        return EmploiTemps::all();
    }
    function store(Request $request)
    {
      $data =  $request->validate([
        'filiere'=>'required|string',
        'niveau'=>'required|string',
        'id_admin'=>'required|integer',
        'id_salle'=>'required|integer',
        ]);
        $EmploiTemps = EmploiTemps::create($data);

        return response($EmploiTemps,201);
    }
    function update(Request $request,EmploiTemps $EmploiTemps)
    {
      $data =  $request->validate([
        'filiere'=>'required|string',
        'niveau'=>'required|string',
       'id_admin'=>'required|integer',
        'id_salle'=>'required|integer',
        ]);
        $EmploiTemps->update($data);

        return response($EmploiTemps,200);
    }
    function destroy(EmploiTemps $EmploiTemps)
    {
      
        $EmploiTemps->delete();

        return response('delete to EmploiTemps',200);
    }
}
