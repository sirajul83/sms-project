<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->increments('id');
            $table->text('t_name');
            $table->text('t_id');
            $table->text('gender');
            $table->text('blood');
            $table->text('dob');
            $table->text('religion');
            $table->text('t_phone');
            $table->text('email');
            $table->text('t_nid');
            $table->text('image');
            $table->text('j_date');
            $table->text('t_address');
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
        Schema::dropIfExists('teacher');
    }
}
