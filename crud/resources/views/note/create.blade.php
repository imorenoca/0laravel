@extends('layouts.app')

@section('content')
<a href="{{route('note.index')}}">Back</a>
<form method='POST' action="{{route('note.store')}}">
@csrf    
<label for="">Title</label>
    <input type="text" name="title" />
    <label for="">Description:</label>
    <input type="text" name="description"/> 
    <input type="submit" value="Create"/> 
</form>

@endsection