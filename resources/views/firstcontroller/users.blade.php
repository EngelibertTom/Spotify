@extends('layout')

@section('content')

    <h1>La page de {{$user->name}}</h1>

    <h3>Ses chansons</h3>
    @include("_songs",["songs" => $user->songs])


    @auth
              @if(Auth::id()!= $user->id)
                  @if(Auth::user()->IfollowThem->contains($user->id))
                      <a href="/suivre/{{$user->id}}">Suivi</a>
                      @else
                      <a href="/suivre/{{$user->id}}">Suivre</a>
                    @endif
              @endif
    @endauth
                <ul>
                    <li>{{$user->songs()->count()}} chansons</li>
                    <li>{{$user->theyFollowMe()->count()}} abonnés</li>
                    <li>{{$user->IfollowThem()->count()}} abonnement(s)</li>
                </ul>
    @endsection

