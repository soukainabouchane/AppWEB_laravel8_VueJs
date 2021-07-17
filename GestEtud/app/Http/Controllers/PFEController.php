<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PFE;

class PFEController extends Controller
{
    function list_pfe($id=null)
    {
        return $id?PFE::find($id):PFE::all();
    }
}
