<?php

namespace App\Models;

use Illuminate\Database\eloquent\ModelNotFoundException;
use Illuminate\support\facades\File;


class Post{

    public static function all(){

        $files = File::files(resource_path("posts/"));

        return array_map(fn($file)=> $file-> getContents(), $files);
    }

    public static function find ($va){

        if (! file_exists($path= resource_path("posts/{$va}.html"))){

            throw new ModelNotFoundException();
        }

        return cache () ->remember("Posts.{$va}", 1200, fn() => file_get_contents($path));
    }
}

