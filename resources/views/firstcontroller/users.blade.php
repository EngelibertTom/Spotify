@extends('layout')

@section('content')

    <div class="profil-info">
    <img class="img-profil" src ="https://www.handiclubnimois.fr/wp-content/uploads/2020/10/blank-profile-picture-973460_1280.png"></img>
    <div class="profil-infos">
    <h3>{{$user->name}}</h3>
    <p class="description">Description de l'utilisateur</p>
    </div>
    <div class="profil-buttons">
    <ul>
    <li>{{$user->songs()->count()}} songs</li>
    <li>{{$user->theyFollowMe()->count()}} followers</li>
    <li>{{$user->iFollowThem()->count()}} follows</li>
    </ul></div>
    </div>

    @auth
    @if(Auth::id()!= $user->id)
        @if(Auth::user()->iFollowThem->contains($user->id))
        <a href="/suivre/{{$user->id}}">Suivi</a>
        @else
        <a href="/suivre/{{$user->id}}">Suivre</a>
        @endif
    @endif
@endauth



    <h3>Ses chansons</h3>
    @include("_songs",["songs" => $user->songs])

    @endsection