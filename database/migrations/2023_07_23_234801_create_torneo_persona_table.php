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
        Schema::create('torneo_persona', function (Blueprint $table) {
            $table->id();
            $table->string("documento_numero");
            $table->string("nombres");
            $table->string("apellidos");
            $table->string("telefono");
            $table->string('email')->unique()->nullable();
            $table->string("pais_nacimiento");
            $table->string("fecha_nacimiento");
            $table->string("ciudad_actual");
            $table->string("domicilio_actual");
            $table->enum("status", ["activo", "inactivo"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneo_persona');
    }
};
