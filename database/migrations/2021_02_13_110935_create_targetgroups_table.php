<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('targetgroups', function (Blueprint $table) {
            $table->bigIncrements('targetgroups_id');
            $table->char('targetgroups_gender', 150);
            $table->string('targetgroups_fname');
            $table->string('targetgroups_lname');
            $table->char('targetgroups_phone', 150);
            $table->string('targetgroups_address'); //ที่อยู่
            $table->string('targetgroups_career'); //อาชีพ
            $table->string('targetgroups_reason'); //เหตุผล

            $table->bigInteger('targetgroups_districts_id')->unsigned()->index()->nullable();  //ตำบล
            $table->foreign('targetgroups_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

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
        Schema::dropIfExists('targetgroups');
    }
}
