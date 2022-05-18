<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
          
            $table->bigIncrements('people_id');
            $table->bigInteger('people_districts_id')->unsigned()->index()->nullable();
            $table->foreign('people_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');
            $table->integer('people_position')->nullable();
            $table->integer('people_type')->nullable();
            $table->char('people_id_card', 13)->nullable();


            $table->char('people_gender', 150);
            $table->char('people_fname', 150);
            $table->char('people_lname', 150);


        
            $table->char('people_email', 200)->nullable();
            $table->char('people_phone', 150);
    
            $table->string('people_car')->nullable();

            $table->integer('people_status')->default(0); // o = คนธรรมดา 1 =  อาจาารย์

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
        Schema::dropIfExists('people');
    }
}
