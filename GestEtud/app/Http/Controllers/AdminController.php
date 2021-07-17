<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function list_admin($id=null)
    {
        return $id?Admin::find($id):Admin::all();
    }
    function index()
    {
        return Admin::all();
    }
    function store(Request $request)
    {
      $data =  $request->validate([
        'nom'=>'required|string',
        'prenom'=>'required|string',
        'cin'=>'required|string',
        'email'=>'required|string',
        'mot_de_passe'=>'required|string',
        ]);
        $admin = Admin::create($data);

        return response($admin,201);
    }
    function update(Request $request,Admin $admin)
    {
      $data =  $request->validate([
        'nom'=>'required|string',
        'prenom'=>'required|string',
        'cin'=>'required|string',
        'email'=>'required|string',
        'mot_de_passe'=>'required|string',
        ]);
        $admin->update($data);

        return response($admin,200);
    }
    function destroy(Admin $admin)
    {
      
        $admin->delete();

        return response('delete to admin',200);
    }


}
