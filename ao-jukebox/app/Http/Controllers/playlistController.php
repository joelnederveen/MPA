<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\PlaylistSession;
use App\Models\PlaylistSong;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class playlistController extends Controller
{
    public function index()
    {
        $sp = new PlaylistSession();

        return view('Playlist.index', compact('sp'));


    }

    public function add($id)
    {
        $sp = new PlaylistSession();
        $sp->addSongToPlaylist($id);

        return view('Playlist.SongAdd', compact('sp'));
    }


    public function CreatePlaylistInDatabase(){
        return view('Playlist.playlistAdd');
    }

    public function CreatingPlaylistInDatabase(Request $request){
        $playlist = new Playlist();

        $playlist->name = $request->input('playlistName');

        $playlist->save();

        return view('Playlist.SongAdd');

    }


    public function addPlaylistToDatabase($id)
    {
        $playlist = new PlaylistSong();
        $playlist->playlist_id = '2';
        $playlist->song_id = $id;

        $playlist->save();
        return view('Playlist.SongAdd');
    }

}
