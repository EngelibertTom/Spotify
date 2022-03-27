@foreach ($albums as $a)


    <div class="albums">

       <a href="/songsalbum"> <div style="background-image: url('{{$a['cover']}}'); width:150px; height:150px; background-size:cover;">
        </div>
       </a>
        <h1>{{$a['title']}}</h1>
    </div>



    @endforeach