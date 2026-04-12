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
    Schema::create('gestors', function (Blueprint $table) {
        $table->id('gid');
        $table->string('nom');
        $table->string('cognoms');
        $table->integer('tlf_mobil');
        $table->string('email');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestors');
    }
};
