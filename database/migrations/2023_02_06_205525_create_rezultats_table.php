<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezultats', function (Blueprint $table) {
            $table->id();
            $table->string('datum');
            $table->foreignId('domacin_id')->constrained('drzavas');
            $table->foreignId('gost_id')->constrained('drzavas');
            $table->string('rezultat_utakmice');
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
        Schema::dropIfExists('rezultats');
    }
}
