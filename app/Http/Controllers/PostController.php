<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        return Post::with('user','category')->get();
    }

    function singlePost($id){
     $posts = Post::with('user','category')->where('id',$id)->get();
     $comments = Comment::with('user')->where('post_id',$id)->get();
     $latestCommentsByPost = Comment::with('user')->where('post_id',$id)->orderBy('id','DESC')->limit(1)->get();
    

     return ['post'=>$posts, 'comment' => $comments, 'latestCommentByPost' => $latestCommentsByPost];

       
   }


   function getCommentsByPost($id){

    

   }

}
