<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<header>
<nav>
        <a href="/">Accueil</a>
        <a href="/nouvelle/chanson">Nouvelle Chanson</a>
    @auth
        Bonjour {{Auth::user()->name}}
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @else
        <a href="/login">Connexion</a>
        <a href="/register">Inscription</a>
    @endauth
        <a href="/about">About me</a>

</nav>
</header>
<section>


<h1> Gaming OST, </br> le meilleur des musiques</br> de jeux vidéos</h1>
<button>Découvrez les musiques</button>

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

</section>


<audio id="lecteur" controls>

</audio>
<main>

@yield("content")
</main>

<footer>
    <div>
        <h3>About</h3>
        <p>GamingOST provides you the best musics from the video games you love the most.</p>
    </div>
    <div class="footer-wrap">
    <div>
        <h3>Quick Links</h3>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/nouvelle/chanson">New Song</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </div>
    <div>
        <h3>Socials</h3>
        <ul>
            <li>Twitter</li>
            <li>Facebook</li>
            <li>Instagram</li>
        </ul>
    </div></div>
    <div>
    Copyright 2022
    </div>
</footer>
</body>
<script src="/js/jquery.js"></script>
<script src="/js/divers.js"></script>
</html>
