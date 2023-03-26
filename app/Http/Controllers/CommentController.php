<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    //show all comments in admin panel
    public function showComments()
    {
        $comments = Comments::all();
        $user = User::whereIn('id', $comments->pluck('user_id'))->get();

        return view('Admin/Comments', ['comments' => $comments] , ['users' => $user]);
    }
    //delete comment
    public function DeleteComment($id)
    {
        
        $comment = Comments::find($id);
        $comment->delete();
        return redirect('/Comments')->with('message', 'You have successfully deleted a comment');
    }
    
   
}
