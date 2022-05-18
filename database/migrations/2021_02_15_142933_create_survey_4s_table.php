<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurvey4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_4s', function (Blueprint $table) {
            $table->bigIncrements('survey_4s_id'); // FK

            $table->bigInteger('survey_4s_villages')->unsigned()->index()->nullable();  // หมู่บ้าน
            $table->foreign('survey_4s_villages')->references('villages_id')->on('villages')->onDelete('cascade');


            $table->mediumText('survey_4s_school')->nullable(); // โรงเรียน
            $table->mediumText('survey_4s_address')->nullable(); // ที่อยู่
            $table->integer('survey_4s_set')->nullable(); // ชุดที่

            $table->mediumText('survey_4s_no_1');
            $table->mediumText('survey_4s_no_1_note')->nullable(); 

            $table->mediumText('survey_4s_no_2');
            $table->mediumText('survey_4s_no_2_note')->nullable(); 

            $table->mediumText('survey_4s_no_3'); 
            $table->mediumText('survey_4s_no_3_note')->nullable(); 

            $table->mediumText('survey_4s_no_4');
            $table->mediumText('survey_4s_no_4_note')->nullable(); 

            $table->mediumText('survey_4s_no_5');
            $table->mediumText('survey_4s_no_5_note')->nullable(); 

            $table->mediumText('survey_4s_no_6');
            $table->mediumText('survey_4s_no_6_note')->nullable(); 

            $table->mediumText('survey_4s_no_7');
            $table->mediumText('survey_4s_no_7_note')->nullable(); 

            $table->mediumText('survey_4s_no_8');
            $table->mediumText('survey_4s_no_8_note')->nullable(); 

            $table->mediumText('survey_4s_no_9');
            $table->mediumText('survey_4s_no_9_note')->nullable(); 


            $table->mediumText('survey_4s_no_10');
            $table->mediumText('survey_4s_no_10_note')->nullable(); 



            $table->mediumText('survey_4s_no_11');
            $table->mediumText('survey_4s_no_11_note')->nullable(); 

            $table->mediumText('survey_4s_no_12');
            $table->mediumText('survey_4s_no_12_note')->nullable(); 

            $table->mediumText('survey_4s_no_13'); 
            $table->mediumText('survey_4s_no_13_note')->nullable(); 

            $table->mediumText('survey_4s_no_14');
            $table->mediumText('survey_4s_no_14_note')->nullable(); 

            $table->mediumText('survey_4s_no_15');
            $table->mediumText('survey_4s_no_15_note')->nullable(); 

            $table->mediumText('survey_4s_no_16');
            $table->mediumText('survey_4s_no_16_note')->nullable(); 

            $table->mediumText('survey_4s_no_17');
            $table->mediumText('survey_4s_no_17_note')->nullable(); 

            $table->mediumText('survey_4s_no_18');
            $table->mediumText('survey_4s_no_18_note')->nullable(); 

            $table->mediumText('survey_4s_no_19');
            $table->mediumText('survey_4s_no_19_note')->nullable(); 


            $table->mediumText('survey_4s_no_20');
            $table->mediumText('survey_4s_no_20_note')->nullable(); 







            
            $table->mediumText('survey_4s_no_21');
            $table->mediumText('survey_4s_no_21_note')->nullable(); 

            $table->mediumText('survey_4s_no_22');
            $table->mediumText('survey_4s_no_22_note')->nullable(); 

            $table->mediumText('survey_4s_no_23'); 
            $table->mediumText('survey_4s_no_23_note')->nullable(); 

            $table->mediumText('survey_4s_no_24');
            $table->mediumText('survey_4s_no_24_note')->nullable(); 

            $table->mediumText('survey_4s_no_25');
            $table->mediumText('survey_4s_no_25_note')->nullable(); 

            $table->mediumText('survey_4s_no_26');
            $table->mediumText('survey_4s_no_26_note')->nullable(); 

            $table->mediumText('survey_4s_no_27');
            $table->mediumText('survey_4s_no_27_note')->nullable(); 

            $table->mediumText('survey_4s_no_28');
            $table->mediumText('survey_4s_no_28_note')->nullable(); 

            $table->mediumText('survey_4s_no_29');
            $table->mediumText('survey_4s_no_29_note')->nullable(); 


            $table->mediumText('survey_4s_no_30');
            $table->mediumText('survey_4s_no_30_note')->nullable(); 




            $table->mediumText('survey_4s_no_31');
            $table->mediumText('survey_4s_no_31_note')->nullable(); 

            $table->mediumText('survey_4s_no_32');
            $table->mediumText('survey_4s_no_32_note')->nullable(); 

            $table->mediumText('survey_4s_no_33'); 
            $table->mediumText('survey_4s_no_33_note')->nullable(); 

            $table->mediumText('survey_4s_no_34');
            $table->mediumText('survey_4s_no_34_note')->nullable(); 

            $table->mediumText('survey_4s_no_35');
            $table->mediumText('survey_4s_no_35_note')->nullable(); 

            $table->mediumText('survey_4s_no_36');
            $table->mediumText('survey_4s_no_36_note')->nullable(); 

            $table->mediumText('survey_4s_no_37');
            $table->mediumText('survey_4s_no_37_note')->nullable(); 

            $table->mediumText('survey_4s_no_38');
            $table->mediumText('survey_4s_no_38_note')->nullable(); 

            $table->mediumText('survey_4s_no_39');
            $table->mediumText('survey_4s_no_39_note')->nullable(); 


            $table->mediumText('survey_4s_no_40');
            $table->mediumText('survey_4s_no_40_note')->nullable(); 



            

            $table->mediumText('survey_4s_no_41');
            $table->mediumText('survey_4s_no_41_note')->nullable(); 

            $table->mediumText('survey_4s_no_42');
            $table->mediumText('survey_4s_no_42_note')->nullable(); 

            $table->mediumText('survey_4s_no_43');
            $table->mediumText('survey_4s_no_43_note')->nullable(); 


            $table->mediumText('survey_4s_no_44');
            $table->mediumText('survey_4s_no_44_note')->nullable(); 



            $table->bigInteger('survey_4s_user')->unsigned()->index()->nullable();
            $table->foreign('survey_4s_user')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('survey_4s_districts_id')->unsigned()->index()->nullable();  //ตำบล
            $table->foreign('survey_4s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');
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
        Schema::dropIfExists('survey_4s');
    }
}
