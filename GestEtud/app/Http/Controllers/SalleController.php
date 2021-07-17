<?php

namespace App\Http\Controllers;
use App\Models\Salle;

use Illuminate\Http\Request;

class SalleController extends Controller
{
    function list_salle($id=null)
    {
        return $id?Salle::find($id):Salle::all();
    }
}
