<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;


class SongsController extends Controller
{
    //show song list
    public function songlist()
    {
        $songs = Song::all();
        return view('index', compact('songs'));
    }
    // show single music
    public function SingleMusic($id)
    {
        $song = Song::find($id);
        
        return view('singleMusic', ['song' => $song], ['comments' => $song->comments]);
    }
   
   
}
