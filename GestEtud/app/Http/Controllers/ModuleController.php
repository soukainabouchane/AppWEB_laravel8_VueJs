<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    function list_module($id=null)
    {
        return $id?Module::find($id):Module::all();
    }
    function store(Request $request)
    {
      $data =  $request->validate([
        'nom_module'=>'required|string',
        'nombre_heures'=>'required|string',
        'id_prof'=>'required|integer',
        'id_admin'=>'required|integer',
        ]);
        $Module = Module::create($data);

        return response($Module,201);
    }
    function update(Request $request,Module $Module)
    {
      $data =  $request->validate([
        'nom_module'=>'required|string',
        'nombre_heures'=>'required|string',
        'id_prof'=>'required|integer',
        'id_admin'=>'required|integer',
        ]);
        $Module->update($data);

        return response($Module,200);
    }
    function destroy(Module $Module)
    {
      
        $Module->delete();

        return response('delete to Module',200);
    }
}
