@extends("layout")

@section("content")
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
    @endif

            </ul>
        </div>
    <form method="post" action="/chanson/store" enctype="multipart/form-data">
        @csrf
        Ajouter une chanson
        <input type="text" required placeholder="Title" name="title" value="{{old('title')}}"/>
        </br>
        <input type="file" required  name="song"/>
        </br>
        <input type="number" required min="0" max="10" placeholder="note" name="note" value="{{old('title')}}"/>

        <select name="album">
            @foreach(Auth::user()->albums as $a)
                <option value="{{$a->id}}">{{$a->title}}</option>
            @endforeach
        </select>
        </br>
        <input type="submit" />
    </form>


        <form method="post" action="/album/store" enctype="multipart/form-data">
            @csrf
            Ajouter un album
            <input type="text" required placeholder="Title" name="title" value="{{old('title')}}"/>
            </br>
            <input type="file" required  name="cover"/>
            </br>
            <input type="submit" />
        </form>

@endsection
