<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/posts',[PostController::class,'index'])->name('post.list');
Route::get('/post/{id}',[PostController::class,'singlePost'])->name('post.details');

Route::get('/',[PageController::class,'index']);
Route::get('/post-details/{id}',[PageController::class,'postDetails']);


