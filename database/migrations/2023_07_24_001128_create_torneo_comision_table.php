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
        Schema::create('torneo_comision', function (Blueprint $table) {
            $table->id();
            $table->integer('torneo_id');
            $table->string('gerente_nombre');
            $table->string('gerente_telefono');
            $table->string('gerente_foto', 2048)->nullable();
            $table->string('presidente_nombre')->nullable();
            $table->string('presidente_telefono')->nullable();
            $table->string('presidente_foto', 2048)->nullable();
            $table->string('vicepresidente_nombre')->nullable();
            $table->string('vicepresidente_telefono')->nullable();
            $table->string('vicepresidente_foto', 2048)->nullable();
            $table->string('secretario_nombre')->nullable();
            $table->string('secretario_telefono')->nullable();
            $table->string('secretario_foto', 2048)->nullable();
            $table->string('tesorero_nombre')->nullable();
            $table->string('tesorero_telefono')->nullable();
            $table->string('tesorero_foto', 2048)->nullable();
            $table->enum("status", ["activo", "inactivo"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneo_comision');
    }
};
