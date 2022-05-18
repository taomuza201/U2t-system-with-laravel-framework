<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm13sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form13s', function (Blueprint $table) {
            $table->bigIncrements('form13s_id')->comment('FK'); 
            $table->bigInteger('form13s_user')->unsigned()->index()->nullable()->comment('คนทำ'); // คนทำ
            $table->foreign('form13s_user')->references('id')->on('users')->onDelete('cascade');



            $table->bigInteger('form13s_districts_id')->unsigned()->index()->nullable()->comment('อ้างอิงตำบล');  //ตำบล
            $table->foreign('form13s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

            $table->mediumText('form13s_title')->comment('ชื่อเรื่อง');
            $table->mediumText('form13s_commentator')->comment('ผู้ที่เกี่ยวข้อง*');
            $table->longText('form13s_details')->comment('รายละเอียด');

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
        Schema::dropIfExists('form13s');
    }
}
