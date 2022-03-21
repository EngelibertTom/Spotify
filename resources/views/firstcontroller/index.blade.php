@extends('layout')

@section('content')

    <section>


        <h1  class="premiertitre"> Gaming OST, </br> le meilleur des musiques</br> de jeux vidéos</h1>
        <div class="button">
        <button>Découvrez les musiques</button>
        </div>

        <div class="lesjeux">

            <div class="jeux1">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="jeux2">
                <div></div>
                <div></div>
                <div></div>
            </div>

        </div>
        @include("_songs",["songs" => $songs])
    </section>


    </audio>
@endsection
