<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
             $table->engine = 'InnoDB';
            $table->Increments('id');
            $table->integer('montant');
             $table->unsignedInteger('users_id')->index();
           $table->foreign('users_id')->references('id')->on('users');
             $table->unsignedInteger('shows_id')->index();
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
        Schema::dropIfExists('reservation');
    }
}