<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listings;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(PostSeeder::class);
        //Post::factory(20)->create();

        $user= User::factory()->create([
            'name'=>'john dow',
            'email'=>'john@gmail.com',
            'password'=>'123456',
        ]);

        Listings::factory(12)->create([
            'user_id'=>$user->id
        ]);

    }
}
