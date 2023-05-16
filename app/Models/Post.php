<?php

namespace App\Models;

use Illuminate\Database\eloquent\ModelNotFoundException;
use Illuminate\support\facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Contracts\Cache;


class Post
{

    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }
    public static function all()
    {

        return cache()->remember('post.all', 1200, function () {

            return collect(File::files(resource_path("posts")))
                ->map(fn ($file) => YamlFrontMatter::parseFile($file))
                ->map(fn ($document) => new Post($document->title, $document->excerpt, $document->date, $document->body(), $document->slug))
                ->sortBy('date');
        });
    }

    public static function find($post)
    {

        return static::all()->firstWhere('slug', $post);
    }
}
