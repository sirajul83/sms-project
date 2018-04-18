<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->increments('id');
            $table->text('e_name');
            $table->text('b_name');
            $table->text('roll');
            $table->text('reg');
            $table->text('section');
            $table->text('session');
            $table->text('dob');
            $table->text('shift');
            $table->text('gender');
            $table->text('blood');
            $table->text('class');
            $table->text('religion');
            $table->text('std_phone');
            $table->text('f_name');
            $table->text('m_name');
            $table->text('g_nid');
            $table->text('address');
            $table->text('image');
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
        Schema::dropIfExists('registration');
    }
}
