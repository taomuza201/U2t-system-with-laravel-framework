<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm6sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form6s', function (Blueprint $table) {
            $table->bigIncrements('form6s_id')->comment('FK'); 
            $table->bigInteger('form6s_user')->unsigned()->index()->nullable()->comment('คนทำ'); // คนทำ
            $table->foreign('form6s_user')->references('id')->on('users')->onDelete('cascade');


            $table->bigInteger('form6s_districts_id')->unsigned()->index()->nullable()->comment('อ้างอิงตำบล');  //ตำบล
            $table->foreign('form6s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');


            $table->string('form6s_agency')->nullable()->comment('หน่วยงาน');
            $table->string('form6s_work')->nullable()->comment('งาน');
            $table->mediumText('form6s_file')->nullable()->comment('ไฟล์รูป หรือ pdf');


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
        Schema::dropIfExists('form6s');
    }
}
