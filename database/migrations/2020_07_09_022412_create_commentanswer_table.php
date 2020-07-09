<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentanswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentanswer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment');
            $table->integer('answer_id')->unsigned();
			$table->integer('user_id')->unsigned();
            $table->timestamps();
			
			$table->foreign('asnwer_id')
                  ->references('id')
                  ->on('answers');
                  
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentanswer');
    }
}
