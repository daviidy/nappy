<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->default('Scarlette');
            $table->string('prenoms')->default('Johansson');
            $table->double('taille')->default('170');
            $table->string('nationalite')->default('Ivoirienne');
            $table->double('age')->default('21');
            $table->string('profession')->default('Etudiante');
            $table->string('image')->default('image.jpg');
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
        Schema::dropIfExists('misses');
    }
}
