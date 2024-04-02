@extends('layouts.app')
@section('content')
<a href="{{route('note.index')}}">Back</a>
<h3>Editar nota</h3>
<br>
    <form method= "POST" action="{{route ('note.update', $note->id)}}"> <!-- es un único parámetro sino tendría que ser un array asociativo-->
        @method('PUT')
        @csrf
        <label for="">Title:</label>
        <input type="text" name="title" value="{{$note->title}}"/>
        <label for="">Description:</label>
        <input type="text" name="description" value="{{$note->description}}"/>
        
        <input type="submit" value="Update"/>

    </form>

@endsection