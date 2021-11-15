<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistSong extends Model
{
    use HasFactory;

    protected $table = 'playlist_song';

    function songName(){
//        dd($this);
        return Song::find($this->song_id);
    }



}
