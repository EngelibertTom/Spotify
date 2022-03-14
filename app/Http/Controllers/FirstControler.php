<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FirstControler extends Controller
{
    public function index()
    {

        $songs = Song::all();
        //  $s = Song::find(1);
        //    echo $s->title;die(1);


        return view("firstcontroller.index", ["songs" => $songs]);
    }

    public function about()
    {
        return view("firstcontroller.about");
    }


    public function article($id)
    {
        return view("firstcontroller.article", ["id" => $id]);
    }

    public function nouvellechanson()
    {
        return view("firstcontroller.nouvellechanson");
    }

    public function storechanson(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'note' => 'required|integer|min:0|max:10',
            'song' => 'required|mimes:ogg,mp3',

        ]);

        $name = $request->file("song")->hashName();
        $request->file('song')->move("songs/" . Auth::id(), $name);

        $s = new Song();
        $s->url = "/songs/" . Auth::id() . "/$name";
        $s->title = $request->input("title");
        $s->note = $request->input("note");
        $s->user_id = Auth::id();
        $s->save();

        return redirect("/");
    }

    public function users($id)
    {           
        $user = User::findorFail($id);
        return view("firstcontroller.users", ["user" => $user]);
    }

    public function suivre($id)
    {
        $user = User::findOrFail($id);
        Auth::user()->IfollowThem()->toggle($id);
        return back();
    }
}

