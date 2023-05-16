<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\support\facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


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

    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($post) {

    return view('post', [
        'post' => post::find($post)
    ]);
})->where('post', '[A-z_\-]+');
