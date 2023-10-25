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
        Schema::create('torneo_organizacion', function (Blueprint $table) {
            $table->id();
            $table->integer('torneo_id');
            $table->integer('user_id');
            $table->string('user_codigo');
            $table->string('organizacion');
            $table->string('codigo');
            $table->string('documento_tipo')->nullable();
            $table->string('documento_numero')->nullable();
            $table->string('pais');
            $table->string('ciudad');
            $table->text('direccion');
            $table->string('telefono');
            $table->string('representante');
            $table->string('manager_nombre');
            $table->string('manager_telefono');
            $table->string('logo');
            $table->enum("status", ["activo", "inactivo", "suspendido"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneo_organizacion');
    }
};
