<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm9sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form9s', function (Blueprint $table) {
            $table->bigIncrements('form9s_id')->comment('FK'); 
            $table->bigInteger('form9s_user')->unsigned()->index()->nullable()->comment('คนทำ'); // คนทำ
            $table->foreign('form9s_user')->references('id')->on('users')->onDelete('cascade');



            $table->bigInteger('form9s_districts_id')->unsigned()->index()->nullable()->comment('อ้างอิงตำบล');  //ตำบล
            $table->foreign('form9s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

            
         


            $table->mediumText('form9s_title')->comment('ชื่อเรื่อง');
            $table->mediumText('form9s_refer')->comment('เช่น Link เว็บไซต์');
            $table->longText('form9s_details')->comment('รายละเอียด');



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
        Schema::dropIfExists('form9s');
    }
}
