@foreach ($albums as $a)


    <div class="albums">

        <div style="background-image: url('{{$a['cover']}}'); width:150px; height:150px; background-size:cover;">
        </div>
        <h1>{{$a['title']}}</h1>
    </div>



    @endforeach