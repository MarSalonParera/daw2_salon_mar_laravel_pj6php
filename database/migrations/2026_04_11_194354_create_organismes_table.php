<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('organismes', function (Blueprint $table) {
            $table->id();
            $table->string('titol_llibre');
            $table->string('codi_oficial')->unique();
            $table->string('nom_organisme');
            $table->enum('tipus', ['organisme', 'fons', 'programa', 'agencia']);
            $table->integer('any_fundacio');
            $table->float('pressupost_anual');
            $table->string('pais_seu');
            $table->string('ciutat_seu');
            $table->date('data_creacio_registre');
            $table->integer('nombre_empleats');
            $table->boolean('actiu');
            $table->string('web_oficial');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('organismes');
    }
};
