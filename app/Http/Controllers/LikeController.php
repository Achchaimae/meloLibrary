<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Song;
use Illuminate\Http\Request;

class LikeController extends Controller

{

   
public function like(Request $request){
    $formFields = $request->validate([
        'user_id' => 'required',
        'song_id' => 'required'
    ]);

    $user_id = $request->input('user_id');
    $song_id = $request->input('song_id');

    $existingLike = Like::where('user_id', $user_id)->where('song_id', $song_id)->first();

    if ($existingLike) {
        // user has already liked the song
        $isLiked = true;
    } else {
        // user has not yet liked the song, create a new like record
        $like = Like::create($formFields);
        $isLiked = true;
    }

    return redirect('/singleMusic/'.$song_id)
        ->with('message', 'You have successfully liked this song')
        ->with('isLiked', $isLiked);
}
 
 //show liked song page
 public function showLikes()
 {
     $likes = Like::with('songs')->get();
     
     return view('LikedSongs', compact('likes'));

 }
 
    
    
}
