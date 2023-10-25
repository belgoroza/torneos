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
        Schema::create('torneo_representantes', function (Blueprint $table) {
            $table->id();
            $table->integer('persona_id');
            $table->integer('torneo_id');
            $table->enum("status", ["activo", "inactivo"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneo_representantes');
    }
};
