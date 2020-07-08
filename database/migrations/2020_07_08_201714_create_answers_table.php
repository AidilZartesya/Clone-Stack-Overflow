<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
			$table->increments('id');
            $table->string('answer');
			$table->integer('user_id')->unsigned();
			$table->integer('question_id')->unsigned();
			$table->timestamps();
			
            $table->foreign('question_id')
                  ->references('id')
                  ->on('questions');
				  
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
        Schema::dropIfExists('answers');
    }
}
