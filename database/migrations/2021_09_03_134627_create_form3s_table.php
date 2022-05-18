<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form3s', function (Blueprint $table) {
            $table->bigIncrements('form3s_id')->comment('FK'); 
            $table->bigInteger('form3s_user')->unsigned()->index()->nullable()->comment('คนทำ'); // คนทำ
            $table->foreign('form3s_user')->references('id')->on('users')->onDelete('cascade');



            $table->bigInteger('form3s_districts_id')->unsigned()->index()->nullable()->comment('อ้างอิงตำบล');  //ตำบล
            $table->foreign('form3s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');


            $table->integer('form3s_district')->comment('ตำบล');
            $table->integer('form3s_prefecture')->comment('อำเภอ');
            $table->integer('form3s_province')->comment('จังหวัด');
            $table->integer('form3s_country')->comment('ประเทศ');
            $table->bigInteger('form3s_continent')->comment('ทวีป');
            $table->bigInteger('form3s_world')->comment('ทั่วโลก');
           
            
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
        Schema::dropIfExists('form3s');
    }
}
