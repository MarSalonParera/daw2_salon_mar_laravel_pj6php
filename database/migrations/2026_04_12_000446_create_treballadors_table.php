<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('treballadors', function (Blueprint $table) {
    $table->id('tid');
    $table->string('nom');
    $table->string('cognoms');
    $table->string('nif');
    $table->date('data_naixement');
    $table->string('sexe');
    $table->string('adressa');
    $table->integer('tlf_fixe');
    $table->integer('tlf_mobil');
    $table->string('email');
    $table->string('fotografia')->nullable();
    $table->boolean('treball_distancia');
    $table->string('tipus_contracte');
    $table->date('data_contractacio');
    $table->integer('categoria');
    $table->string('nom_feina');
    $table->float('sou', 10, 2);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treballadors');
    }
};
