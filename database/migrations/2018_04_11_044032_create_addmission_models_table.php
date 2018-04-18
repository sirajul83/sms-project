<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddmissionModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addmission', function (Blueprint $table) {
            $table->increments('id');
            $table->text('e_name');
            $table->text('b_name');
            $table->text('class');
            $table->text('year');
            $table->text('gender');
            $table->text('blood');
            $table->text('dob');
            $table->text('religion');
            $table->text('status');
            $table->text('std_phone');
            $table->text('pre_school');
            $table->text('f_name');
            $table->text('m_name');
            $table->text('f_occation');
            $table->text('m_occation');
            $table->text('g_name');
            $table->text('g_nid');
            $table->text('present_address');
            $table->text('parmanent_address');
            $table->text('image');
            $table->text('quata');
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
        Schema::dropIfExists('addmission');
    }
}
