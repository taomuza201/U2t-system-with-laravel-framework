<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form4s', function (Blueprint $table) {
            $table->bigIncrements('form4s_id')->comment('FK'); 
            $table->bigInteger('form4s_user')->unsigned()->index()->nullable()->comment('คนทำ'); // คนทำ
            $table->foreign('form4s_user')->references('id')->on('users')->onDelete('cascade');



            $table->bigInteger('form4s_districts_id')->unsigned()->index()->nullable()->comment('อ้างอิงตำบล');  //ตำบล
            $table->foreign('form4s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

            $table->mediumText('form4s_title')->comment('ชื่อเรื่อง');
            $table->mediumText('form4s_refer')->comment('แหล่งอ้างอิง');
            $table->longText('form4s_details')->comment('รายละเอียด');



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
        Schema::dropIfExists('form4s');
    }
}
