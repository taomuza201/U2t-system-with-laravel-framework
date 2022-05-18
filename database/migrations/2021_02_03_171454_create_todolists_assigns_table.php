<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodolistsAssignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todolists_assigns', function (Blueprint $table) {
            $table->bigIncrements('todolists_assigns_id');

            // $table->bigInteger('todolists_assigns_by')->unsigned()->index()->nullable();
            // $table->foreign('todolists_assigns_by')->references('id')->on('users')->onDelete('cascade');


            $table->bigInteger('todolists_assigns_at')->unsigned()->index()->nullable();
            $table->foreign('todolists_assigns_at')->references('id')->on('users')->onDelete('cascade');


            $table->bigInteger('todolists_assigns_todolists')->unsigned()->index()->nullable();
            $table->foreign('todolists_assigns_todolists')->references('todolists_id')->on('todolists')->onDelete('cascade');


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
        Schema::dropIfExists('todolists_assigns');
    }
}
