<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpmapOfDetailsTable extends Migration
{
    /**
     * Run the migrations_
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpmap_of_details', function (Blueprint $table) {
            $table->bigIncrements('tpmap_of_details_id');

            $table->char('village_ID', 150)->unique();


            
            $table->bigInteger('districts_id')->unsigned()->index()->nullable();  //ตำบล
            $table->foreign('districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

            $table->bigInteger('tpmap_of_years_id')->unsigned()->index()->nullable();
            $table->foreign('tpmap_of_years_id')->references('tpmap_of_years_id')->on('tpmap_of_years')->onDelete('cascade');


        
            $table->integer('poor_household_CNT')->default(0);
            $table->integer('poor_JPT_CNT')->default(0);
            $table->integer('poor_JPT_MOFreg_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_health')->default(0);
            $table->integer('poor_JPT_MOFval_living')->default(0);
            $table->integer('poor_JPT_MOFval_education')->default(0);
            $table->integer('poor_JPT_MOFval_income')->default(0);
            $table->integer('poor_JPT_MOFval_accessibility')->default(0);
            $table->float('JPT_MOFval_pov_rate')->default(0);

            $table->integer('poor_JPT_MOFval_ind1_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind2_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind3_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind4_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind5_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind6_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind7_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind8_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind9_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind10_CNT')->default(0);

            $table->integer('poor_JPT_MOFval_ind11_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind12_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind13_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind14_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind15_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind16_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind17_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind18_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind19_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind20_CNT')->default(0);


            $table->integer('poor_JPT_MOFval_ind21_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind22_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind23_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind24_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind25_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind26_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind27_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind28_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind29_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind30_CNT')->default(0);
            $table->integer('poor_JPT_MOFval_ind31_CNT')->default(0);



            $table->integer('province_ID')->default(0);
            $table->string('village_name');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations_
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tpmap_of_details');
    }
}
