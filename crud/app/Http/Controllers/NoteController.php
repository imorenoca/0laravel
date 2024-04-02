<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
// dentro del controlador el crud
class NoteController extends Controller
{
    public function index (){
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create(){
        return view('note.create');
    }

    public function store(Request $request){

        Note::create( $request->all() ); //crea una nota con los campos que se envian por request

       /* Note::create([
            'title'->$request->title,
            'description'->$request->description
        ])*/
        /*$note= new Note;
        $note->tittle= $request->tittle;
        $note->description= $request->description;
        $note->save();*/

        return redirect()->route('note.index');

    }
// atajo de laravel
    public function edit (Note $note){
        return view('note.edit', compact('note'));
    }
    /*public function edit ($note){
        $myNote = Note::find($note);
        return view();
    }*/

    public function update(Request $request, Note $note) {
        $note->update($request->all());
        return redirect()->route('note.index');
    }

    public function show (Note $note){
        return view('note.show', compact('note'));
    }
}
