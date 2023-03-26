<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Song;
use Illuminate\Http\Request;

class LikeController extends Controller

{
    // public function like(Request $request)
    // {
    //    $formFields = $request->validate([
    //         'user_id' => 'required',
    //         'song_id' => 'required'
            
    //     ]);
    //     if(Like::create($formFields)){
    //         //change style of like button

    //         return redirect('/singleMusic/'.$request->input('song_id'))->with('message', 'You have successfully liked this song');
    //     }else{
    //           ebort(500);
    //       };

    // }
    //chage style of like button
    public function like(Request $request)
{
    $formFields = $request->validate([
        'user_id' => 'required',
        'song_id' => 'required'
    ]);

    $like = Like::create($formFields);

    if ($like) {
        // Set $isLiked flag to true if the song is liked by the current user
        $isLiked = auth()->user()->hasLiked(Song::find($request->input('song_id')));

        return redirect('/singleMusic/'.$request->input('song_id'))
            ->with('message', 'You have successfully liked this song')
            ->with('isLiked', $isLiked);
    } else {
        abort(500);
    }
}
 //show liked song page
 public function showLikes()
 {
     $likes = Like::with('songs')->get();
     return view('LikedSongs', compact('likes'));
 }
 
    
    
}
