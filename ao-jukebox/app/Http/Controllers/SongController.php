<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $Songs= Song::all();
        return view('Song.Index', compact('Songs'));
    }

    public function playlist()
    {

        return view('Playlist.playlist');
    }

    public function SongAdd()
    {
        $Songs= Song::all();
        return view('SongAdd.SongAdd', compact('Songs'));

    }
    public function SongAdding(Request $request)
    {
        $Songs= Song::all();

        $song = new Song();

        $song->songname = $request->input('songName');
        $song->genres = $request->input('genre');

        $song->save();
        return view('Song.Index', compact('Songs'));
    }
}
