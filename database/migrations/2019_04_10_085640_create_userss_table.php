<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    

        Schema::create('userss', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('login')->length(30);
            $table->string('password')->length(255);
            $table->string('firstname')->length(60);
            $table->string('lastname')->length(60);
            $table->string('email')->length(100);
            $table->string('langue')->length(2);
            $table->unsignedInteger('roles_id')->index();
            $table->foreign('roles_id')->references('id')->on('roles');

            

           

            
    
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userss');
    }
}
