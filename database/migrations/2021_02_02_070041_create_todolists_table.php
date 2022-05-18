<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodolistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todolists', function (Blueprint $table) {
            $table->bigIncrements('todolists_id');
            $table->string('todolists_title');
            $table->string('todolists_detail')->nullable();

            $table->bigInteger('todolists_madeby')->unsigned()->index()->nullable();
            $table->foreign('todolists_madeby')->references('id')->on('users')->onDelete('cascade');


            // $table->bigInteger('todolists_assign')->unsigned()->index()->nullable();
            // $table->foreign('todolists_assign')->references('id')->on('users')->onDelete('cascade');


            $table->integer('todolists_status')->default(0);
            $table->date('todolists_deadline');

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
        Schema::dropIfExists('todolists');
    }
}
