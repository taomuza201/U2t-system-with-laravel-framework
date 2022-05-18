<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodolistFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todolist_files', function (Blueprint $table) {
            $table->bigIncrements('todolist_files_id');
            $table->string('todolist_files_title');
            $table->string('todolist_files_path');
            $table->bigInteger('todolist_files_refer')->unsigned()->index()->nullable();
            $table->foreign('todolist_files_refer')->references('todolists_id')->on('todolists')->onDelete('cascade');
            $table->integer('todolist_files_status')->default(0);
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
        Schema::dropIfExists('todolist_files');
    }
}
