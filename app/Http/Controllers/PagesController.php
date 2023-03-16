<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }
    public function album() {
        $songs = DB::table('songs')->get();
        return view('Album', ['songs' => $songs]);
    }
}
