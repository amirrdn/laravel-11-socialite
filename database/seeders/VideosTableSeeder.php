<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videos')->insert([
            ['title' => 'Sample Video 1', 'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'created_at' => now(),
            'updated_at' => now(),],
            ['title' => 'Sample Video 2', 'url' => 'https://www.youtube.com/watch?v=3JZ_D3ELwOQ', 'created_at' => now(),
            'updated_at' => now(),],
            ['title' => 'Sample Video 3', 'url' => 'https://www.youtube.com/watch?v=9bZkp7q19f0', 'created_at' => now(),
            'updated_at' => now(),],
            [
                'title' => 'Introduction to Laravel',
                'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Getting Started with Blade Templates',
                'url' => 'https://www.youtube.com/watch?v=k4m9K1oxG9o',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Eloquent ORM Basics',
                'url' => 'https://www.youtube.com/watch?v=GB1aP-QF4zo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
