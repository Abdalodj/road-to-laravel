<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Database\Seeder;

class FakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::factory(15)->create();

        Video::factory(5)->has(
            Comment::factory(rand(0, 5))
        )->create(); 
        Post::factory(10)
                ->has(
                    Comment::factory(rand(5, 10))
                    )->has(
                        Image::factory(1)
                        )->create()->each(
                            function($post) {
                                $randomTags = Tag::all()->random( rand(0, 10) )->pluck('id');
                                $post->tags()->attach($randomTags, ['created_at' => now()]);
                            }
                        );
    }
}
