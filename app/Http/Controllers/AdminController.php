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
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'duration' => ['required', 'min:3', 'max:255'],
                'lyrics' => 'required',
                'music' => 'required|mimes:mpga,wav,mp3,mp4,ogg,webm,3gp,mov,flv,avi,wmv,ts',


            ]);

            if($request->hasFile('image')){
                $formFields['image'] = $request->file('image')->store('images', 'public');
            }
            if($request->hasFile('music')){
                $formFields['music'] = $request->file('music')->store('music', 'public');
            }
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
     return view('/Admin/Gestion/UpdateSong', ['song' => $song]);
        
    }
    //Update song
    public function UpdateSong(Request $request, $id){
        
        $song = Song::find($id);
        $song->title = $request->input('title');
        $song->artist = $request->input('artist');
        $song->writer = $request->input('writer');
        $song->tag = $request->input('tag');
        $song->language = $request->input('language');
        $song->release_date = $request->input('release_date');
        $song->duration = $request->input('duration');
        $song->lyrics = $request->input('lyrics');

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        if($request->hasFile('music')){
            $formFields['music'] = $request->file('music')->store('music', 'public');
        }
        $song->update($formFields);
        return redirect('/Dashboard')->with('message', 'You have successfully updated a song');
    }
    //Delete song
    public function DeleteSong($id){
        $song = Song::find($id);
        $song->delete();
        return redirect('/Dashboard')->with('message', 'You have successfully deleted a song');
    }
}
