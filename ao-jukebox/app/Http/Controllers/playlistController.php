<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Playlist;
use App\Models\PlaylistSession;
use App\Models\PlaylistSong;
use App\Models\Song;
use Dflydev\DotAccessData\Data;
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
        $songs= Song::all();
        $sp = new PlaylistSession();

        return view('Playlist.playlistAdd', compact('songs', 'sp'));
    }

//    public function CreatingPlaylistInDatabase(Request $request){
//        $playlist = new Playlist();
//
//        $playlist->name = $request->input('playlistName');
//
//        $playlist->save();
//
//        return view('Playlist.SongAdd');
//
//    }


    public function CreatingPlaylistInDatabase(Request $request)
    {
        $sessionSongs = new PlaylistSession();
        $playlist = new Playlist();




        $playlist->name = $request->input('playlistName');

        $playlist->save();

        $playlistId = $playlist->id;




        foreach($sessionSongs->getPlaylist() as $song){

            $playlistSong = new PlaylistSong();
            $playlistSong->playlist_id = $playlistId;
            $playlistSong->song_id = $song->id;

            $playlistSong->save();
        }

        $request->session()->forget('song');

        $sessionSongs->deleteSession();

        return view('Playlist.SongAdd');
    }

    public function databasePlaylist()
    {
        $Songs= Song::all();
        $Playlists= Playlist::all();

//        GenreName= Genre::find()

        return view('Playlist.databasePlaylist', compact('Songs', 'Playlists'));
    }


    public function specificPlaylist($playlist)
    {
        $songNames= Song::all();
        $genre= Genre::all();


        $Songs= PlaylistSong::where('playlist_id', '=', $playlist)->get();
        return view('Playlist.specificPlaylist', compact('Songs', 'songNames', 'genre'));
    }
}
