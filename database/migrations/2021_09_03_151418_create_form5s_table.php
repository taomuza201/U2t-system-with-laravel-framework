<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form5s', function (Blueprint $table) {
            $table->bigIncrements('form5s_id')->comment('FK'); 
            $table->bigInteger('form5s_user')->unsigned()->index()->nullable()->comment('คนทำ'); // คนทำ
            $table->foreign('form5s_user')->references('id')->on('users')->onDelete('cascade');



            $table->bigInteger('form5s_districts_id')->unsigned()->index()->nullable()->comment('อ้างอิงตำบล');  //ตำบล
            $table->foreign('form5s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

            $table->mediumText('form5s_title')->comment('ชื่อเรื่อง');
            $table->mediumText('form5s_commentator')->comment('ผู้ให้ความคิดเห็น');
            $table->longText('form5s_details')->comment('รายละเอียด');



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
        Schema::dropIfExists('form5s');
    }
}
