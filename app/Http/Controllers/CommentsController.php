<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
   function comment(Request $request){

    $comment = new Comment();
    $comment->user_id = 11;
    $comment->post_id = $request->post_id;
    $comment->comment = $request->comment;
    

    $result = $comment->save();
    if($result){
        return redirect()->back();
    }

   }
}
