<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p>one to be one and only</p>',
            'body' => '<p>An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases.</p>',
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>one to be one and only</p>',
            'body' => '<p>An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases.</p>',
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>one to be one and only</p>',
            'body' => '<p>An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases. An article is any member of a class of dedicated words that are used with noun phrases to mark the identifiability of the referents of the noun phrases. The category of articles constitutes a part of speech. In English, both "the" and "a(n)" are articles, which combine with nouns to form noun phrases.</p>',
        ]);
    }
}
