@extends('layouts.app')

@section('content')
    Liste des épisodes :
    @if(!empty($series))
        @foreach($series as $serie)
            <p>{{$serie -> nom}}</p>
        @endforeach
    @else
        <h3>Aucune série</h3>
    @endif
@endsection