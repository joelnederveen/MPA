<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $Songs= Song::all();
        $genre= Genre::all();
        return view('Song.Index', compact('Songs', 'genre'));
    }

    public function playlist()
    {

        return view('Playlist.playlist');
    }

    public function SongAdd()
    {
        $genres= Genre::all();
        return view('SongAdd.SongAdd', compact('genres'));

    }
    public function SongAdding(Request $request)
    {

        $song = new Song();



        $song->songname = $request->input('songName');
        $song->genres = $request->input('genre');

        $song->save();
        return view('Playlist.SongAdd');
    }
}
