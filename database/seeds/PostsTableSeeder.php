<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('posts')->insert(array(
         	['title' => "Post-1"],
         	['title' => "Post-2"],
         	['title' => "Post-3"],
         	['title' => "Post-4"],
         	['title' => "Post-5"],
         	['title' => "Post-6"],
         	['title' => "Post-7"],
         	['title' => "Post-8"],
         	['title' => "Post-9"]
         ));
    }
}

// Install Compose
// Create laravel project
// Execute migrations
// Execture Seeds in order
// set the db properties
