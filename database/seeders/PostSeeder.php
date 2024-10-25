<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::truncate();
        
        for ($i = 0; $i < 50; $i++) {
            $title = fake()->sentence();

            Post::create([
                'title' => $title,
                'slug' => str()->slug($title),
                'content' => fake()->paragraph()
            ]);
        }
    }
}
