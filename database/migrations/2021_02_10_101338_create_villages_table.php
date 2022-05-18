<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villages', function (Blueprint $table) {
            $table->bigIncrements('villages_id');
            $table->bigInteger('villages_districts_id')->unsigned()->index()->nullable();  //ตำบล
            $table->foreign('villages_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

            $table->string('villages_name')->unique();  // หมู่บ้าน

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
        Schema::dropIfExists('villages');
    }
}
