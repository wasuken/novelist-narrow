<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_papers', function (Blueprint $table) {
            $table->bigInteger('post_id');
            $table->bigInteger('paper_id');
            $table->bigInteger('post_substring_id');
            $table->double('position');
            $table->timestamps();

            $table->primary(array('post_id', 'paper_id', 'post_substring_id'));
            $table
                ->foreign('post_id')
                ->references('id')
                ->on('posts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table
                ->foreign('paper_id')
                ->references('id')
                ->on('papers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table
                ->foreign('post_substring_id')
                ->references('id')
                ->on('post_substrings')
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
        Schema::dropIfExists('post_papers');
    }
}
