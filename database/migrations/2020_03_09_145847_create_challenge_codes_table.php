<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChallengeCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenge_codes', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('participant_id');
            $table->integer('challenge_id');
            $table->boolean('winner');
            $table->text('code');


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
        Schema::dropIfExists('challenge_codes');
    }
}
