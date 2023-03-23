<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\PlaylistSong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaylistController extends Controller
{
//     // store new playlist
   public function Newplaylist(Request $request){
        $formFields =$request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'image' => 'required',
        ]);
        //|image|mimes:jpeg,png,jpg,gif,svg|max:2048
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        Playlist::create($formFields);
        return redirect('/playlist')->with('message', 'You have successfully added a playlist');
    }
   //show all playlist
   public function showplaylist(){
    $playlist = DB::table('playlists')->get();
    $playlists = Playlist::all();
    return view('/playlist', ['playlists' => $playlists]);

   }
     //Edit song
     public function EditPlaylist($id){
        $playlist = Playlist::find($id);
        return view('/GestionUser/UpdatePlaylist', ['playlist' => $playlist]);
        
    }
    //Update playlist
    public function UpdatePlaylist(Request $request, $id){
        
        $playlist = Playlist::find($id);
        $playlist->name = $request->input('name');
        $playlist->image = $request->input('image');
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        $playlist->update($formFields);
        return redirect('/playlist')->with('message', 'You have successfully updated a playlist');
    }
   //delete playlist
    public function DeletePlaylist($id){
     $playlist = Playlist::find($id);
   
     $playlist->delete();
     return redirect('/playlist')->with('message', 'You have successfully deleted a playlist');
    }

    
    //add song  to playlist
    public function addToPlaylist(Request $request)
{    
       $music = $request->input('music_id');
        $playlist = $request->input('playlist_id');   
        $formFields =[
            'song_id' => $music,
            'playlist_id' => $playlist,
        ];      
        dd($formFields);
        // hna fin wsalna 3la l'ajout f la base de donnée
        PlaylistSong::create($formFields);
        return redirect('/album')->with('message', 'You have successfully added a song to a playlist');
       
        
    }

}
 

 