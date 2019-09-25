<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post}',function(Post $post){
	// App\post::findOrFall($id);
	// dd($post);
	return view('post', compact('post'));
});