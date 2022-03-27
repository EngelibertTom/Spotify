@extends('layout')

@section('content')

    <section>


        <h1  class="premiertitre"> Gaming OST, </br> le meilleur des musiques</br> de jeux vidéos</h1>
        <div class="button">
        <button>Découvrez les musiques</button>
        </div>

        <div class="lesalbums1" style="display:block;">
            <div class="lesalbums" style="display:flex;justify-content: space-evenly; ">

                @include("_albums", ["albums" => $albums])
            </div>
        </div>


        @include("_songs",["songs" => $songs])


    </section>


    </audio>
@endsection
