<?php

namespace App\Http\Controllers;
use App\Models\Note;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    function list_note($id=null)
    {
        return $id?Note::find($id):Note::all();
    }
    function store(Request $request)
    {
      $data =  $request->validate([
        'note'=>'required|integer',
        'mention'=>'required|string',
        'id_etudiant'=>'required|integer',
        'id_prof'=>'required|integer',
        'id_admin'=>'required|integer',
        'id_module'=>'required|integer',
        ]);
        $Note = Note::create($data);

        return response($Note,201);
    }
    function update(Request $request,Note $Note)
    {
      $data =  $request->validate([
        'note'=>'required|integer',
        'mention'=>'required|string',
        'id_etudiant'=>'required|integer',
        'id_prof'=>'required|integer',
        'id_admin'=>'required|integer',
        'id_module'=>'required|integer',
        ]);
        $Note->update($data);

        return response($Note,200);
    }
    function destroy(Note $Note)
    {
      
        $Note->delete();

        return response('delete to Note',200);
    }
}
