<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Post One',
                'excerpt' => 'Summary of Post One',
                'body' => 'Content of Post One',
                'image_path' => 'Empty for now',
                'is_published' => false,
                'min_to_read' => 2,
            ],
            [
                'title' => 'Post Two',
                'excerpt' => 'Summary of Post Two',
                'body' => 'Content of Post Two',
                'image_path' => 'Empty for now',
                'is_published' => false,
                'min_to_read' => 4,
            ],
            [
                'title' => 'Post 3',
                'excerpt' => 'Summary of Post 3',
                'body' => 'Content of Post 3 ',
                'image_path' => fake()->imageUrl(640, 480, 'animals', true),
                'is_published' => false,
                'min_to_read' => 3,
            ],
        ];

        // Post::created([
        //     'title' => 'Post One',
        //     'excerpt' => 'Summary of Post One',
        //     'body' => 'Content of Post One',
        //     'image_path' => 'Empty for now',
        //     'is_published' => false,
        //     'min_to_read' => 2,
        // ]);
        
        // Post::created([
        //     'title' => 'Post Two',
        //     'excerpt' => 'Summary of Post Two',
        //     'body' => 'Content of Post Two',
        //     'image_path' => 'Empty for now',
        //     'is_published' => false,
        //     'min_to_read' => 4,
        // ]);
        
        // Post::created([
        //     'title' => 'Post 3',
        //     'excerpt' => 'Summary of Post 3',
        //     'body' => 'Content of Post 3 ',
        //     'image_path' => fake()->imageUrl(640, 480, 'animals', true),
        //     'is_published' => false,
        //     'min_to_read' => 3,
        // ]);



        foreach($posts as $key =>$value){
            Post::create($value);
        }
    }
}
