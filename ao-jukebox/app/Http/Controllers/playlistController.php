<?php

namespace App\Http\Controllers;

use App\Models\PlaylistSession;
use Illuminate\Http\Request;

class playlistController extends Controller
{
    public function index(){
        $sp = new PlaylistSession();

        return view('Playlist.index', compact('sp'));


    }

    public function add($id) {
        $sp = new PlaylistSession();
        $sp->addSongToPlaylist($id);

        return view('SongAdd.SongAdd', compact('sp'));
    }
}
