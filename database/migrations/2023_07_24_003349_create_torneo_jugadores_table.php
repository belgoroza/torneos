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
        Schema::create('torneo_jugadores', function (Blueprint $table) {
            $table->id();
            $table->integer("torneo_id");
            $table->integer("equipo_id");
            $table->integer("persona_id");
            $table->string("alias");
            $table->string("numero");
            $table->string("posicion");
            $table->enum("status", ["activo", "inactivo","suspendido","expulsado"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneo_jugadores');
    }
};
