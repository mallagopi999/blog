<?php

use Illuminate\Database\Seeder;

class PostsParagraphMappingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('post_paragraph_mapping')->insert(array(
         	['post_id' => 1,'paragraph_id' => 1],
         	['post_id' => 1,'paragraph_id' => 2],
         	['post_id' => 1,'paragraph_id' => 3],
         	['post_id' => 1,'paragraph_id' => 4],
         	['post_id' => 2,'paragraph_id' => 5],
         	['post_id' => 2,'paragraph_id' => 6],
         	['post_id' => 2,'paragraph_id' => 7],
         	['post_id' => 2,'paragraph_id' => 8],
         	['post_id' => 2,'paragraph_id' => 9],
         	['post_id' => 3,'paragraph_id' => 10],
         	['post_id' => 4,'paragraph_id' => 11],
         	['post_id' => 4,'paragraph_id' => 12],
         	['post_id' => 5,'paragraph_id' => 13],
         	['post_id' => 5,'paragraph_id' => 14],
         	['post_id' => 5,'paragraph_id' => 15],
         	['post_id' => 5,'paragraph_id' => 16],
         	['post_id' => 6,'paragraph_id' => 17],
         	['post_id' => 6,'paragraph_id' => 18],
         	['post_id' => 7,'paragraph_id' => 19],
         	['post_id' => 7,'paragraph_id' => 20]
         ));
    }
}
