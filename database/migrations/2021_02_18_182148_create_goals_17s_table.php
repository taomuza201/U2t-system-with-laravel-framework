<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoals17sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals_17s', function (Blueprint $table) {
            $table->bigIncrements('goals_17s_id');

            $table->bigInteger('goals_17s_refer')->unsigned()->index()->nullable();  // อ้างอิงเป้าหมาย
            $table->foreign('goals_17s_refer')->references('goals_id')->on('goals')->onDelete('cascade');


            $table->bigInteger('goals_17s_people');//จำนวนประชากรทั้งตำบล
            $table->bigInteger('goals_17s_male');//ประชากรชาย
            $table->bigInteger('goals_17s_female');//ประกรหญิง


            $table->bigInteger('goals_17s_age_1_14');
            $table->bigInteger('goals_17s_age_15_35');
            $table->bigInteger('goals_17s_age_36_56');
            $table->bigInteger('goals_17s_age_57_plus');
            $table->bigInteger('goals_17s_area_size');





            $table->bigInteger('goals_17s_user')->unsigned()->index()->nullable();
            $table->foreign('goals_17s_user')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('goals_17s_districts_id')->unsigned()->index()->nullable();  //ตำบล
            $table->foreign('goals_17s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

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
        Schema::dropIfExists('goals_17s');
    }
}
