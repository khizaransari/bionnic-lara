<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('answers')->default(0);
            $table->integer('votes')->default(0);
            $table->unsignedBigInteger('best_answer_vote')->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->referance()->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
