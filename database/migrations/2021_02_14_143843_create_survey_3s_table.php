<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurvey3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_3s', function (Blueprint $table) {
            $table->bigIncrements('survey_3s_id'); // FK

                  
            $table->bigInteger('survey_3s_villages')->unsigned()->index()->nullable();  // หมู่บ้าน
            $table->foreign('survey_3s_villages')->references('villages_id')->on('villages')->onDelete('cascade');


            $table->mediumText('survey_3s_religious_place')->nullable(); // ศาสนสถาน
            $table->mediumText('survey_3s_address')->nullable(); // ที่อยู่
            $table->integer('survey_3s_set')->nullable(); // ชุดที่

            $table->mediumText('survey_3s_no_1');
            $table->mediumText('survey_3s_no_1_note')->nullable(); 

            $table->mediumText('survey_3s_no_2');
            $table->mediumText('survey_3s_no_2_note')->nullable(); 

            $table->mediumText('survey_3s_no_3'); 
            $table->mediumText('survey_3s_no_3_note')->nullable(); 

            $table->mediumText('survey_3s_no_4');
            $table->mediumText('survey_3s_no_4_note')->nullable(); 

            $table->mediumText('survey_3s_no_5');
            $table->mediumText('survey_3s_no_5_note')->nullable(); 

            $table->mediumText('survey_3s_no_6');
            $table->mediumText('survey_3s_no_6_note')->nullable(); 

            $table->mediumText('survey_3s_no_7');
            $table->mediumText('survey_3s_no_7_note')->nullable(); 

            $table->mediumText('survey_3s_no_8');
            $table->mediumText('survey_3s_no_8_note')->nullable(); 



            $table->bigInteger('survey_3s_user')->unsigned()->index()->nullable();
            $table->foreign('survey_3s_user')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('survey_3s_districts_id')->unsigned()->index()->nullable();  //ตำบล
            $table->foreign('survey_3s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

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
        Schema::dropIfExists('survey_3s');
    }
}
