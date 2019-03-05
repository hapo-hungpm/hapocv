<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('date_of_birth');
            $table->string('email')->unique();
            $table->string('facebook');
            $table->string('skype');
            $table->string('chatwork');
            $table->string('address');
            $table->string('image');
            $table->string('position');
            $table->string('summary');
            $table->string('status');
            $table->string('image_mini');
            $table->string('professional_skill_title');
            $table->string('personal_skill_title');
            $table->string('work_experience_title');
            $table->string('education_title');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('cvs');
    }
}
