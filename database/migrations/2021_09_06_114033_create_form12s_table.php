<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm12sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form12s', function (Blueprint $table) {
            $table->bigIncrements('form12s_id')->comment('FK'); 
            $table->bigInteger('form12s_user')->unsigned()->index()->nullable()->comment('คนทำ'); // คนทำ
            $table->foreign('form12s_user')->references('id')->on('users')->onDelete('cascade');



            $table->bigInteger('form12s_districts_id')->unsigned()->index()->nullable()->comment('อ้างอิงตำบล');  //ตำบล
            $table->foreign('form12s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

            
         


            $table->mediumText('form12s_definition')->comment('ความต้องการของชุมชน');
            $table->mediumText('form12s_refer')->comment('เช่น Link เว็บไซต์');
            $table->longText('form12s_details')->comment('รายละเอียด');
            $table->longText('form12s_learning_tools')->comment('สื่อ/เครื่องมือในการจัดการเรียนรู้*');
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
        Schema::dropIfExists('form12s');
    }
}
