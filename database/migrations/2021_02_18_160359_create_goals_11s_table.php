<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoals11sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals_11s', function (Blueprint $table) {
            $table->bigIncrements('goals_11s_id');

            $table->bigInteger('goals_11s_refer')->unsigned()->index()->nullable();  // อ้างอิงเป้าหมาย
            $table->foreign('goals_11s_refer')->references('goals_id')->on('goals')->onDelete('cascade');


            $table->mediumText('goals_11s_at_name');//ชื่อคนที่ตอบแบบถอบถาม
            $table->mediumText('goals_11s_address');//สถานที่ตอบแบบสอบถาม
            $table->mediumText('goals_11s_problem');//ปัญหาอุปสรรค์


            // --------------------------------------------------------- ตัวชี้วัด
            $table->mediumText('goals_11s_indicators_1');
            $table->mediumText('goals_11s_indicators_1_name')->nullable(); 
            $table->mediumText('goals_11s_indicators_1_refer')->nullable(); 

            $table->mediumText('goals_11s_indicators_2');
            $table->mediumText('goals_11s_indicators_2_name')->nullable(); 
            $table->mediumText('goals_11s_indicators_2_refer')->nullable(); 

            $table->mediumText('goals_11s_indicators_3');
            $table->mediumText('goals_11s_indicators_3_name')->nullable(); 
            $table->mediumText('goals_11s_indicators_3_refer')->nullable(); 

        

           




            // --------------------------------------------------------- การดำเนินการ
            $table->mediumText('goals_11s_operation_1');
            $table->mediumText('goals_11s_operation_1_name')->nullable(); 
            $table->mediumText('goals_11s_operation_1_refer')->nullable(); 

            $table->mediumText('goals_11s_operation_2');
            $table->mediumText('goals_11s_operation_2_name')->nullable(); 
            $table->mediumText('goals_11s_operation_2_refer')->nullable(); 

            $table->mediumText('goals_11s_operation_3');
            $table->mediumText('goals_11s_operation_3_name')->nullable(); 
            $table->mediumText('goals_11s_operation_3_refer')->nullable(); 

            $table->mediumText('goals_11s_operation_4');
            $table->mediumText('goals_11s_operation_4_name')->nullable(); 
            $table->mediumText('goals_11s_operation_4_refer')->nullable(); 

            $table->mediumText('goals_11s_operation_5');
            $table->mediumText('goals_11s_operation_5_name')->nullable(); 
            $table->mediumText('goals_11s_operation_5_refer')->nullable(); 

            $table->mediumText('goals_11s_operation_6');
            $table->mediumText('goals_11s_operation_6_name')->nullable(); 
            $table->mediumText('goals_11s_operation_6_refer')->nullable(); 

            $table->mediumText('goals_11s_operation_7');
            $table->mediumText('goals_11s_operation_7_name')->nullable(); 
            $table->mediumText('goals_11s_operation_7_refer')->nullable(); 

            $table->mediumText('goals_11s_operation_8');
            $table->mediumText('goals_11s_operation_8_name')->nullable(); 
            $table->mediumText('goals_11s_operation_8_refer')->nullable(); 

            $table->mediumText('goals_11s_operation_9');
            $table->mediumText('goals_11s_operation_9_name')->nullable(); 
            $table->mediumText('goals_11s_operation_9_refer')->nullable(); 

            // $table->mediumText('goals_11s_operation_10');
            // $table->mediumText('goals_11s_operation_10_name')->nullable(); 
            // $table->mediumText('goals_11s_operation_10_refer')->nullable(); 

            // $table->mediumText('goals_11s_operation_11');
            // $table->mediumText('goals_11s_operation_11_name')->nullable(); 
            // $table->mediumText('goals_11s_operation_11_refer')->nullable(); 

            // $table->mediumText('goals_11s_operation_12');
            // $table->mediumText('goals_11s_operation_12_name')->nullable(); 
            // $table->mediumText('goals_11s_operation_12_refer')->nullable(); 


            $table->bigInteger('goals_11s_user')->unsigned()->index()->nullable();
            $table->foreign('goals_11s_user')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('goals_11s_districts_id')->unsigned()->index()->nullable();  //ตำบล
            $table->foreign('goals_11s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

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
        Schema::dropIfExists('goals_11s');
    }
}
