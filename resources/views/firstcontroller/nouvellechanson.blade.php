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
        <h2>Add a new song</h2>
    <form method="post" action="/chanson/store" enctype="multipart/form-data">
        @csrf
        <input type="file" required  name="song"/>
        </br>
        <input type="text" required placeholder="Title" name="title" value="{{old('title')}}"/>
        </br>
        <input type="text" required placeholder="Album" name="album" value="{{old('album')}}"/>
        </br>
        <input type="number" required min="0" max="5" placeholder="note" name="note" value="{{old('title')}}"/>
        </br>
        <input type="submit" />
    </form>

    <h2>Add a new album</h2>
    <form method="post" action="/chanson/store" enctype="multipart/form-data">
        @csrf
        <input type="file" required  name="song"/> <!-- ALBUM COVER -->
        </br>
        <input type="text" required placeholder="Album Title" name="album" value="{{old('album')}}"/>
        </br>
        <input type="text" required placeholder="Artist" name="album" value="{{old('album')}}"/>
        </br>
        <input type="text" required placeholder="Year" name="album" value="{{old('album')}}"/>
        </br>
        <input type="submit" />
    </form>

@endsection
