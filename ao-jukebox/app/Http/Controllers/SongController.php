<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function Index()
    {
        $Songs= Song::all();
        return view('Song.Index', compact('Songs'));
    }
}


