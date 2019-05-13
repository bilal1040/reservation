<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentationsUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representations_user', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->Increments('id');
            $table->integer('places');
            $table->unsignedInteger('users_id')->index();
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedInteger('representation_id')->index();
            $table->foreign('representation_id')->references('id')->on('representations');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representations_user');
    }
}
