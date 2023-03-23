<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }
    // public function album() {
    //     $songs = DB::table('songs')->get();
    //     $playlists = DB::table('playlists')->get();
    //     return view('album', ['songs' => $songs, 'playlists' => $playlists]);
    // }
    public function album()
{
    $songs = DB::table('songs')->get();
    $playlists = DB::table('playlists')->get();
    return view('album', compact('songs', 'playlists'));
    
}

    
    

}
