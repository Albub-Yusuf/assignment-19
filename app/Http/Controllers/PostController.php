<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        return Post::with('user','category')->get();
    }

    function singlePost($id){
     return Post::with('user','category','comments')->where('id',$id)->get();
       
   }

}
