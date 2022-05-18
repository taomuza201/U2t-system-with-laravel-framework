<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->char('gender', 150);
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->char('position', 150);  // แอดมิน 

            $table->bigInteger('districts_id')->unsigned()->index()->nullable();  //ตำบล
            $table->foreign('districts_id')->references('districts_id')->on('districts')->onDelete('cascade');

        
            $table->integer('status')->nullable();
            $table->integer('type')->nullable();
            $table->char('phone', 150);


            $table->integer('active')->default(); // สถานะว่าเช้าระบบได้

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->char('position_orther', 150)->nullable()->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
