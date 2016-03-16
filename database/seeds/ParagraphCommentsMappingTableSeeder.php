<?php

use Illuminate\Database\Seeder;

class ParagraphCommentsMappingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('paragraph_comments_mapping')->insert(array(
         	['comment_id' => 1 ,'paragraph_id' => 1],
         	['comment_id' => 2 ,'paragraph_id' => 2],
         	['comment_id' => 3 ,'paragraph_id' => 3],
         	['comment_id' => 4 ,'paragraph_id' => 4],
         	['comment_id' => 5 ,'paragraph_id' => 5],
         	['comment_id' => 6 ,'paragraph_id' => 6],
         	['comment_id' => 7 ,'paragraph_id' => 7],
         	['comment_id' => 8 ,'paragraph_id' => 8],
         	['comment_id' => 9 ,'paragraph_id' => 9],
         	['comment_id' => 10,'paragraph_id' => 10],
         	['comment_id' => 11,'paragraph_id' => 11],
         	['comment_id' => 12,'paragraph_id' => 12],
         	['comment_id' => 13,'paragraph_id' => 13],
         	['comment_id' => 14,'paragraph_id' => 14],
         	['comment_id' => 15,'paragraph_id' => 15],
         	['comment_id' => 16,'paragraph_id' => 16],
         	['comment_id' => 17,'paragraph_id' => 17],
         	['comment_id' => 18,'paragraph_id' => 18],
         	['comment_id' => 19,'paragraph_id' => 19],
         	['comment_id' => 20,'paragraph_id' => 20],
         	['comment_id' => 21 ,'paragraph_id' => 1],
         	['comment_id' => 22 ,'paragraph_id' => 2],
         	['comment_id' => 23 ,'paragraph_id' => 3],
         	['comment_id' => 24 ,'paragraph_id' => 4],
         	['comment_id' => 25 ,'paragraph_id' => 5],
         	['comment_id' => 26 ,'paragraph_id' => 6],
         	['comment_id' => 27 ,'paragraph_id' => 7],
         	['comment_id' => 28 ,'paragraph_id' => 8],
         	['comment_id' => 29 ,'paragraph_id' => 9],
         	['comment_id' => 30,'paragraph_id' => 10],
         	['comment_id' => 31,'paragraph_id' => 11],
         	['comment_id' => 32,'paragraph_id' => 12],
         	['comment_id' => 33,'paragraph_id' => 13],
         	['comment_id' => 34,'paragraph_id' => 14],
         	['comment_id' => 35,'paragraph_id' => 14],
         	['comment_id' => 36,'paragraph_id' => 14],
         	['comment_id' => 37,'paragraph_id' => 14],
         	['comment_id' => 38,'paragraph_id' => 14],
         	['comment_id' => 39,'paragraph_id' => 14],
         	['comment_id' => 40,'paragraph_id' => 14]
         ));
    }
}
