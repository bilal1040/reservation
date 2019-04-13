<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtisteTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artiste_type', function (Blueprint $table) {
            $table->Increments('id');
           

            $table->unsignedInteger('artists_id')->index();
            $table->unsignedInteger('types_id')->index();

            $table->foreign('artists_id')->references('id')->on('artists');
            $table->foreign('types_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artiste_type');
    }
}
