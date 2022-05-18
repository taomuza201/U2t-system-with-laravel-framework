<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm8sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form8s', function (Blueprint $table) {
            $table->bigIncrements('form8s_id')->comment('FK'); 

            $table->bigInteger('form8s_user')->unsigned()->index()->nullable()->comment('คนทำ'); // คนทำ
            $table->foreign('form8s_user')->references('id')->on('users')->onDelete('cascade');



            $table->bigInteger('form8s_districts_id')->unsigned()->index()->nullable()->comment('อ้างอิงตำบล');  //ตำบล
            $table->foreign('form8s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');



                   
            $table->bigInteger('form8s_villages_id')->unsigned()->index()->nullable()->comment('อ้างอิงหมู่บ่าน');  //ตำบล
            $table->foreign('form8s_villages_id')->references('villages_id')->on('villages')->onDelete('cascade');



            // $table->string('form8s_village_number')->comment('หมู่ที่');
            // $table->string('form8s_village_name')->comment('ชื่อหมู่บ้าน');


            $table->string('form8s_house_number')->comment('บ้านเลขที่');
            $table->string('form8s_name')->comment('ชื่อ-สกุล');
            $table->string('form8s_sex')->comment('เพศ');
            $table->integer('form8s_age')->comment('อายุ');
            $table->string('form8s_religion')->comment('ศาสนา');
            $table->string('form8s_about_head_of_household')->comment('เกี่ยวข้องกับหัวหน้าครัวเรือน');
            $table->string('form8s_education_level')->comment('เกี่ยวข้องกับหัวหน้าครัวเรือน');
            $table->string('form8s_occupation')->comment('อาชีพ');
            $table->mediumText('form8s_expertise')->nullable()->comment('ความเชี่ยวชาญ');
            $table->string('form8s_address_on')->comment('ที่พักอาศัยตั้งอยู่บน');
            $table->string('form8s_occupational_land')->comment('ที่ดินที่ใช้ประกอบอาชีพ');
            $table->string('form8s_saving_type')->comment('มีการเก็บออมเงินรูปแบบใด');
            $table->decimal('form8s_main_money',12,2)->comment('รายได้จากอาชีพหลัก');
            $table->decimal('form8s_sub_money',12,2)->comment('รายได้จากอาชีพรอง/อาชีพเสริม');
            $table->decimal('form8s_expenses',12,2)->comment('รายจ่าย');
            
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
        Schema::dropIfExists('form8s');
    }
}
