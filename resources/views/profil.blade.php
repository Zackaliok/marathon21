@extends('layouts.app')

@section('content')
    @if (Auth::user())
        Heureux de vous revoir : <b>{{ Auth::user()->name }}</b><br>
        <img src="{{asset(Auth::user()->avatar)}}"><br>

        <br><br>
        Informations : <br><br>
        Votre adresse email est : <b>{{Auth::user()->email}}</b> <br>
        Rôle :
        @if(Auth::user()->administrateur== 1)
            <b>Administrateur</b>
        @else
            <b>Utilisateur</b>
        @endif<br>
        Mail vérifié :
        @if(Auth::user()->email_verified_at != null)
            <b>Oui</b>
        @else
            <b>Non</b>
        @endif<br>
        2FA :
        @if(Auth::user()->two_factor_secret != null)
            <b>Oui</b>
        @else
            <b>Non</b>
        @endif

        <br><br>

        Durée visionnée : {{$count}} minutes<br><br>
        Séries vues : <br>

        @foreach($seen as $seens)
            {{$seens->nom}}<br>
        @endforeach

        <br><br>
        <b>Commentaires à valider</b><br><br>
        @if(Auth::user()->administrateur== 1)
            @foreach($content as $contents)
                {{$contents}}<br><br>
            @endforeach
        @endif

    @else
        Erreur : Vous n'êtes pas connecté !
    @endif
@endsection

