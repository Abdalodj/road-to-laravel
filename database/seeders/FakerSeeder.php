<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Post;
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
        Post::factory(10)
            ->has(
                Comment::factory(rand(3, 6))
            )->has(
                Image::factory(1)
            )->create();
    }
}
