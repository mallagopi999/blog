<?php

use Illuminate\Database\Seeder;

class ParagraphsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('paragraphs')->insert(array(
         	['text' => "Paragraph-1",'seq_no' => 1],
         	['text' => "Paragraph-2",'seq_no' => 2],
         	['text' => "Paragraph-3",'seq_no' => 3],
         	['text' => "Paragraph-4",'seq_no' => 4],
         	['text' => "Paragraph-1",'seq_no' => 1],
         	['text' => "Paragraph-2",'seq_no' => 2],
         	['text' => "Paragraph-3",'seq_no' => 3],
         	['text' => "Paragraph-4",'seq_no' => 4],
         	['text' => "Paragraph-5",'seq_no' => 5],
         	['text' => "Paragraph-1",'seq_no' => 1],
         	['text' => "Paragraph-1",'seq_no' => 1],
         	['text' => "Paragraph-2",'seq_no' => 2],
         	['text' => "Paragraph-1",'seq_no' => 1],
         	['text' => "Paragraph-2",'seq_no' => 2],
         	['text' => "Paragraph-3",'seq_no' => 3],
         	['text' => "Paragraph-4",'seq_no' => 4],
         	['text' => "Paragraph-1",'seq_no' => 1],
         	['text' => "Paragraph-2",'seq_no' => 2],
         	['text' => "Paragraph-1",'seq_no' => 1],
         	['text' => "Paragraph-2",'seq_no' => 2]
         ));
    }
}
