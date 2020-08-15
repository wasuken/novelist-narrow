<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovelPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novel_papers', function (Blueprint $table) {
            $table->bigInteger('paper_id');
            $table->bigInteger('novel_id');
            $table->timestamps();
            $table->primary(array('paper_id', 'novel_id'));
            $table
                ->foreign('paper_id')
                ->references('id')
                ->on('papers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table
                ->foreign('novel_id')
                ->references('id')
                ->on('novels')
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
        Schema::dropIfExists('novel_papers');
    }
}
