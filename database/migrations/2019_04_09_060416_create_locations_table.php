<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->length(60);
            $table->string('designation')->length(60);
            $table->string('address')->length(255);
            $table->unsignedInteger('locality_id')->index();
            $table->foreign('locality_id')->references('id')->on('localitys');
            $table->string('website')->length('255');
            $table->string('phone')->length('30');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
