<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('room_id');
            $table->string('fees');
            $table->timestamp('start_date');
            $table->string('course_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('phone');
            $table->string('email');
            $table->string('level');
            $table->integer('age');
            $table->boolean('paid');
            $table->boolean('checked_in');

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
        Schema::dropIfExists('students');
    }
};
