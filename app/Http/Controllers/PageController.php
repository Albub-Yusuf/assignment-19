<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        return view('pages.home');
    }

    function postDetails($id){
        return view('pages.singlePost');
    }
}
