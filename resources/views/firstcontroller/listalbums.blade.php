@extends('layout')

@section('content')
    <div style="text-align:center; margin-bottom:50px;font-family:'roboto';">
    <h1> Liste des albums</h1>
    </div>
<div class="lesalbums1" style="display:block;">
    <div class="lesalbums" style="display:flex;justify-content: space-evenly; ">

        @include("_albums", ["albums" => $albums])
    </div>
</div>

    @endsection