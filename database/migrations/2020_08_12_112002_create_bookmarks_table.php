<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->bigInteger('reader_id');
            $table->bigInteger('post_id');
            $table->double('position');
            $table->boolean('enable')->default(true);
            $table->timestamps();

            $table->primary(['reader_id', 'post_id']);
            $table
                ->foreign('reader_id')
                ->references('user_id')
                ->on('readers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table
                ->foreign('post_id')
                ->references('id')
                ->on('posts')
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
        Schema::dropIfExists('bookmarks');
    }
}
