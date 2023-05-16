<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Stat;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $tags = Tag::factory(10)->create();
        $articles = Article::factory(20)->create();
        $tag_ids = $tags->pluck('id');

        $articles->each(function ($article) use ($tag_ids) {
            $article->tags()->attach($tag_ids->random(3));
            Comment::factory(3)->create([
                'article_id' => $article->id
            ]);
            Stat::factory(1)->create([
                'article_id' => $article->id
            ]);
        });
    }
}
