<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index($id=25){
       // $note = Note::find($id);
        return view('note.index', compact('id')); 
    }
}
