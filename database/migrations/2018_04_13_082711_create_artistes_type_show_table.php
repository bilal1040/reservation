<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistesTypeShowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistes_type_show', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->Increments('id');

            $table->unsignedInteger('artiste_type_id')->index();
            $table->unsignedInteger('shows_id')->index();

            $table->foreign('artiste_type_id')->references('id')->on('artiste_type');
            $table->foreign('shows_id')->references('id')->on('shows');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artistes_type_show');
    }
}
