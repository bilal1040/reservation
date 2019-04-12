<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('slug')->length(60);
            $table->string('title')->length(255);
            $table->string('poster_url')->length(255);
            $table->tinyInteger('bookable')->length(1);
            $table->decimal('price',10,2);
            $table->unsignedInteger('locality_id')->index();


            $table->foreign('locality_id')->references('id')->on('localitys');
        



           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shows');
    }
}
