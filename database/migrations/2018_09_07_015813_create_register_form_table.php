<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_form', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('en_name');
            $table->string('gender');
            $table->string('national');
            $table->integer('id_number');
            $table->date('dob');
            $table->string('p_village');
            $table->string('p_commune');
            $table->string('p_district');
            $table->string('p_city');
            $table->string('c_village');
            $table->string('c_commune');
            $table->string('c_district');
            $table->string('c_city');
            $table->integer('phone_number');
            $table->string('fb_id');
            $table->string('edu_level');
            $table->string('grade');
            $table->string('from_school');
            $table->string('dir_school_name');
            $table->string('dir_school_gender');
            $table->string('dir_school_phone');
            // info like Parents
            $table->string('father_name');            
            $table->string('mother_position');            
            $table->integer('mother_phone_num');
            $table->string('mother_name');
            $table->string('father_position');
            $table->integer('father_phone_num'); 
            $table->string('second_parents_2');           
            $table->string('second_parents_2_postion');           
            $table->integer('second_parents_2_phone_num'); 
            $table->string('address_parents');  
           //lan
            $table->string('eng'); 
            $table->string('chi'); 
            $table->string('fre'); 
            $table->string('other'); 
            $table->timestamps();
            // lan
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_form');
    }
}
