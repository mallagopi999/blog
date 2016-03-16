<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('comments')->insert(array(
         	['comment' => "Comment-1"],
         	['comment' => "Comment-2"],
         	['comment' => "Comment-3"],
         	['comment' => "Comment-4"],
         	['comment' => "Comment-5"],
         	['comment' => "Comment-6"],
         	['comment' => "Comment-7"],
         	['comment' => "Comment-8"],
         	['comment' => "Comment-9"],
         	['comment' => "Comment-10"],
         	['comment' => "Comment-11"],
         	['comment' => "Comment-12"],
         	['comment' => "Comment-13"],
         	['comment' => "Comment-14"],
         	['comment' => "Comment-15"],
         	['comment' => "Comment-16"],
         	['comment' => "Comment-17"],
         	['comment' => "Comment-18"],
         	['comment' => "Comment-19"],
         	['comment' => "Comment-20"],
         	['comment' => "Comment-21"],
         	['comment' => "Comment-22"],
         	['comment' => "Comment-23"],
         	['comment' => "Comment-24"],
         	['comment' => "Comment-25"],
         	['comment' => "Comment-26"],
         	['comment' => "Comment-27"],
         	['comment' => "Comment-28"],
         	['comment' => "Comment-29"],
         	['comment' => "Comment-30"],
         	['comment' => "Comment-31"],
         	['comment' => "Comment-32"],
         	['comment' => "Comment-33"],
         	['comment' => "Comment-34"],
         	['comment' => "Comment-35"],
         	['comment' => "Comment-36"],
         	['comment' => "Comment-37"],
         	['comment' => "Comment-38"],
         	['comment' => "Comment-39"],
         	['comment' => "Comment-40"]
         ));
    }
}
