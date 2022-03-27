@extends('layout')

@section('content')

    <section>


        <h1  class="premiertitre"> Gaming OST, </br> le meilleur des musiques</br> de jeux vidéos</h1>
        <div class="button">

            @auth
            <a href="/listalbums"> <button href="">Découvrez les musiques</button>
            </a>
            @else
                <a href="/login"> <button href="">Découvrez les musiques</button>
                </a>
                @endauth


        </div>

        


        @include("_songs",["songs" => $songs])


    </section>


    </audio>
@endsection
