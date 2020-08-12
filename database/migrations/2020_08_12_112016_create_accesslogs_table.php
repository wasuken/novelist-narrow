<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccesslogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesslogs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id');
            $table->bigInteger('reader_id');
            $table->string('ip_address');
            $table->string('user_agent_info');
            $table->timestamps();
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('reader_id')->references('user_id')->on('readers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesslogs');
    }
}
