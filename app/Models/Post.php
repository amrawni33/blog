<?php

namespace App\Models;

use Illuminate\Database\eloquent\ModelNotFoundException;
use Illuminate\support\facades\File;


class Post{

    public static function all(){

        $files = File::files(resource_path("posts/"));

        return array_map(fn($file)=> $file-> getContents(), $files);
    }

    public static function find ($post){

        if (! file_exists($path= resource_path("posts/{$post}.html"))){

            throw new ModelNotFoundException();
        }

        return cache () ->remember("Posts.{$post}", 1200, fn() => file_get_contents($path));
    }
}

