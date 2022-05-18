<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm14sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form14s', function (Blueprint $table) {
            $table->bigIncrements('form14s_id')->comment('FK'); 
            $table->bigInteger('form14s_user')->unsigned()->index()->nullable()->comment('คนทำ'); // คนทำ
            $table->foreign('form14s_user')->references('id')->on('users')->onDelete('cascade');



            $table->bigInteger('form14s_districts_id')->unsigned()->index()->nullable()->comment('อ้างอิงตำบล');  //ตำบล
            $table->foreign('form14s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

            $table->mediumText('form14s_title')->comment('ชื่อเรื่อง');
            $table->longText('form14s_details')->comment('รายละเอียด');

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
        Schema::dropIfExists('form14s');
    }
}
