<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm11sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form11s', function (Blueprint $table) {
            $table->bigIncrements('form11s_id')->comment('FK'); 
            $table->bigInteger('form11s_user')->unsigned()->index()->nullable()->comment('คนทำ'); // คนทำ
            $table->foreign('form11s_user')->references('id')->on('users')->onDelete('cascade');



            $table->bigInteger('form11s_districts_id')->unsigned()->index()->nullable()->comment('อ้างอิงตำบล');  //ตำบล
            $table->foreign('form11s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

            
         


            $table->mediumText('form11s_title')->comment('ชื่อเรื่อง');
            $table->mediumText('form11s_refer')->comment('เช่น Link เว็บไซต์');
            $table->longText('form11s_details')->comment('รายละเอียด');



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
        Schema::dropIfExists('form11s');
    }
}
