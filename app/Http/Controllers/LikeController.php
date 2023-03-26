<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Song;
use Illuminate\Http\Request;

class LikeController extends Controller

{

    //change style of like button
//     public function like(Request $request){
//     $formFields = $request->validate([
//         'user_id' => 'required',
//         'song_id' => 'required'
//     ]);

//     $like = Like::create($formFields);

//     if ($like) {
//         // Set $isLiked flag to true if the song is liked by the current user
//         $isLiked = auth()->user()->hasLiked(Song::find($request->input('song_id')));

//         return redirect('/singleMusic/'.$request->input('song_id'))
//             ->with('message', 'You have successfully liked this song')
//             ->with('isLiked', $isLiked);
//     } else {
//         abort(500);
//     }
// }
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
