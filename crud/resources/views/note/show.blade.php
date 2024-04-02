@extends('layouts.app')
@section('content')
<h1> {{$note->title}}   </h1>
<p>{{$note->description}}</p>
<br>
<a href="{{route('note.index')}}">Back</a>


@endsection