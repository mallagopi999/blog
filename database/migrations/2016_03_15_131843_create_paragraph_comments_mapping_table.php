<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParagraphCommentsMappingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paragraph_comments_mapping', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paragraph_id')->unsigned();
            $table->integer('comment_id')->unsigned();
            $table->timestamp("created_at")->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp("updated_at")->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->index(['paragraph_id','comment_id']);

            $table->foreign('paragraph_id')
                ->references('id')->on('paragraphs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('comment_id')
                ->references('id')->on('comments')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paragraph_comments_mapping');
    }
}
