<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;


class PlaylistSession
{
    use HasFactory;

    private $items = array();

    public function __construct()
    {
        if (! Session::exists('playlist')) {
            session::put('playlist', $this->items);
        } else {
            $this->items = session::get('playlist');
        }
    }

    function addSongToPlaylist($id) {
        //$this->items[] = $id;
        array_push($this->items, $id);
        $this->saveToSession();
    }

    function saveToSession() {
        Session::put('playlist', $this->items);
        Session::save();
    }

    public function getPlaylist(){
        $songs = array();

        foreach ($this->items as $song) {
            array_push($songs, Song::find($song));
        }
//        $songs = Song::find($this->Songs);
//        dd($songs);
        return $songs;
    }

    public function deleteSession(){
        Session::forget('playlist');
    }



}
