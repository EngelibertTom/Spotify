<ul class="playlist">
<div class="playlist-header">
    <h1 class="leaderboard__title"><span class="leaderboard__title--top">Title</span>
    <span class="leaderboard__title--bottom">Artist</span></h1>
</div>

  <main class="leaderboard__profiles">
@foreach($songs as $s)
<article class="leaderboard__profile">
      <img src="https://cdns.iconmonstr.com/wp-content/assets/preview/2014/96/iconmonstr-disc-3.png" alt="{{$s['title']}} Cover" class="leaderboard__picture">
      <span class="leaderboard__name"><span class="song-title">{{$s['title']}}</span> posted by <span class="song-artist"><a href="/users/{{ $s->user->id }}">{{ $s->user->name }}</a></span></span>
      <span class="leaderboard__value">{{$s['note']}}</span>  
    </article>

 





<!-- 

    <li>
        <a href="#" class="song" data-file="{{$s->url}}">{{$s['title']}}</a>
         posté par <a href="/users/{{ $s->user->name }}">{{ $s->user->name }}</a> 
        posted by <a href="/users/{{ $s->user->id }}">{{ $s->user->name }}</a>
    </li> -->

@endforeach
<main>
</ul>

<!-- <ul>
@foreach($songs as $s)
    <li>
        <a href="#" class="song" data-file="{{$s->url}}">{{$s['title']}}</a>
        posté par <a href="/users/{{ $s->user->id }}">{{ $s->user->name }}</a>
    </li>

@endforeach
</ul> -->
