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
        Schema::create('torneo_equipo', function (Blueprint $table) {
            $table->id();
            $table->integer('organizacion_id');
            $table->string("codigo");
            $table->string("nombre");
            $table->string("color_1");
            $table->string("color_2");
            $table->string('logo', 2048)->nullable();
            $table->string("lema");
            $table->integer('representante_id');
            $table->integer('categoria_id');
            $table->text("descripcion");
            $table->enum("status", ["activo", "inactivo"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneo_equipo');
    }
};
