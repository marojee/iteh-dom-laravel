<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoviNazivKolone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rezultats', function (Blueprint $table) {
            $table->renameColumn('rezultat_utakmice', 'rezultat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rezultats', function (Blueprint $table) {
            $table->renameColumn('rezultat', 'rezultat_utakmice');
        });
    }
}
