<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
    //store new song
    public function Newsong(Request $request){
            $formFields =$request->validate([
                'title' => ['required', 'min:3', 'max:255'],
                'artist' => ['required', 'min:3', 'max:255'],
                'writer' => ['required', 'min:3', 'max:255'],
                'tag' => ['required', 'min:3', 'max:255'],
                'language' =>'required', 
                'release_date' => ['required', 'min:3', 'max:255'],
                'duration' => ['required', 'min:3', 'max:255'],
                'lyrics' => 'required',


            ]);
        Song::create($formFields);
     return redirect('/Dashboard')->with('message', 'You have successfully added a song');
    }
    //show song list
    public function songlist(){
        $songlist = DB::table('songs')->get();
        $songs = Song::all();
        return view('/Admin/Songs', ['songs' => $songs]);
    }
    //Edit song
    public function EditSong($id){
        $song = Song::find($id);
        return view('/Admin/EditSong', ['song' => $song]);
    }
    //Delete song
    public function DeleteSong($id){
        $song = Song::find($id);
        $song->delete();
        return redirect('/Dashboard')->with('message', 'You have successfully deleted a song');
    }
}
