<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm10sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form10s', function (Blueprint $table) {
            $table->bigIncrements('form10s_id')->comment('FK'); 

            $table->bigInteger('form10s_user')->unsigned()->index()->nullable()->comment('คนทำ'); // คนทำ
            $table->foreign('form10s_user')->references('id')->on('users')->onDelete('cascade');



            $table->bigInteger('form10s_districts_id')->unsigned()->index()->nullable()->comment('อ้างอิงตำบล');  //ตำบล
            $table->foreign('form10s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');


                   
            $table->bigInteger('form10s_villages_id')->unsigned()->index()->nullable()->comment('อ้างอิงหมู่บ่าน');  //ตำบล
            $table->foreign('form10s_villages_id')->references('villages_id')->on('villages')->onDelete('cascade');


            // $table->string('form10s_village_number')->comment('หมู่ที่');
            // $table->string('form10s_village_name')->comment('ชื่อหมู่บ้าน');
         
            $table->mediumText('form10s_economic')->nullable()->comment('ด้านเศรษฐกิจ');
            $table->mediumText('form10s_social')->nullable()->comment('ด้านสังคม');
            $table->mediumText('form10s_environmental')->nullable()->comment('ด้านสิ่งแวดล้อม');
            $table->mediumText('form10s_culture')->nullable()->comment('ด้านศิลปวัฒนธรรม');
            $table->mediumText('form10s_community_grants')->nullable()->comment('ด้านทุนชุมชน');

            
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
        Schema::dropIfExists('form10s');
    }
}
