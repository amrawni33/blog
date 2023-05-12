<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/', function () {
    return view('Posts', [

        'Posts'=> Post::all()
    ]);
});

Route::get('Posts/{post}',function($va){

    $post = Post::find($va);
    return view('Post', [

        'post'=> $post,
    ]);

})-> where('post', '[A-z_\-]+');