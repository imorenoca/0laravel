@extends('layouts.app')

@section('content')
<br>
<a href="{{route('note.create')}}">Create new note</a>
<ul>
    @forelse($notes as $note) 
    <li><a href="{{route('note.show', $note->id)}}">{{$note->title}}</a> | <a href="{{route('note.edit', $note->id) }}">EDIT</a> | <a href="#">DELETE</a></li> 
    @empty
    <p>No data.</p>
    @endforelse
</ul>
@endsection