<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->Increments('id');
            $table->datetime('when');
            $table->unsignedInteger('location_id')->index();
            $table->unsignedInteger('show_id')->index();
            $table->foreign('show_id')->references('id')->on('shows');



            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representations');
    }
}
