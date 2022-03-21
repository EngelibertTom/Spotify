<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>

<header>
<nav>

        <a href="/"><img src="/images/logo.png"></a>
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

<main>

@yield("content")
</main>

<footer>Copyright</footer>
</body>
<script src="/js/jquery.js"></script>
<script src="/js/jquery"
<script src="/js/divers.js"></script>
</html>
