<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm7sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form7s', function (Blueprint $table) {
            $table->bigIncrements('form7s_id')->comment('FK'); 
            $table->bigInteger('form7s_user')->unsigned()->index()->nullable()->comment('คนทำ'); // คนทำ
            $table->foreign('form7s_user')->references('id')->on('users')->onDelete('cascade');



            $table->bigInteger('form7s_districts_id')->unsigned()->index()->nullable()->comment('อ้างอิงตำบล');  //ตำบล
            $table->foreign('form7s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

            $table->mediumText('form7s_title')->comment('ชื่อโครงการ/กิจกรรม');
            $table->longText('form7s_details')->comment('รายละเอียด');



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
        Schema::dropIfExists('form7s');
    }
}
