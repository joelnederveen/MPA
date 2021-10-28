<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class genreController extends Controller
{
    public function index($genre)
    {
        $Songs= Song::where('genres', '=', $genre)->get();
        return view('Genre.Index', compact('Songs'));
    }

    public function genre()
    {
        $Songs= Song::all();
        $Genres= Genre::all();

//        GenreName= Genre::find()

        return view('Genre.genre', compact('Songs', 'Genres'));
    }

    public function genreAdd()
    {
        return view('genreAdd.genreAdd');

    }

    public function genreAdding(Request $request)
    {

        $genre = new Genre();



        $genre->name = $request->input('genreName');

        $genre->save();
        return view('Playlist.SongAdd');
    }

}
