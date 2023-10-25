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
        Schema::create('torneo', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string("nombre");
            $table->string("nombre_2")->nullable();
            $table->string("disciplina")->nullable();
            $table->string('modalidad')->nullable();
            $table->string('categoria');
            $table->date("fecha_inicio");
            $table->date("fecha_fin");
            $table->string("codigo");
            $table->enum("status", ["activo", "inactivo", "finalizado", "suspendido", "clausurado"]);
            $table->enum("validado", ["si", "no"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneo');
    }
};

