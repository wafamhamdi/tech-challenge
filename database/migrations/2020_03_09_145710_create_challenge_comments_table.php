<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;
class CreateChallengeCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenge_comments', function (Blueprint $table) {
          
            $table->integer('id')->autoIncrement();
            $table->integer('challenge_id');
            $table->integer('participant_id');
            $table->string('content');
            $table->date('postedDate')->default( Carbon::now()->toDateTimeString());
            
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
        Schema::dropIfExists('challenge_comments');
    }
}
