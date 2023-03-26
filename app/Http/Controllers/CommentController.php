<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    // create new comment
    public function addComment(Request $request)
    {
        $formFields = $request->validate([
            'comment' => 'required|min:4',
            'user_id' => 'required',
            'song_id' => 'required'
            
        ]);
        if(Comments::create($formFields)){
            return redirect('/singleMusic/'.$request->input('song_id'))->with('message', 'You have successfully added a comment');
        }else{
           ebort(500);
        };
    }
}
