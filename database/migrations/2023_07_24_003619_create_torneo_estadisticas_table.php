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
        Schema::create('torneo_estadisticas', function (Blueprint $table) {
            $table->id();
            $table->integer("torneo_id");
            $table->integer("jugador_id");
            $table->string("tarjeta_amarilla");
            $table->string("tarjeta_roja");
            $table->string("goles");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneo_estadisticas');
    }
};
