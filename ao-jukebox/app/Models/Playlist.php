<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;


class Playlist extends Model
{
    use HasFactory;

    protected $table = 'playlist';
    /**
     * The roles that belong to the user.
     */
    public function Songs()
    {

    }

}
