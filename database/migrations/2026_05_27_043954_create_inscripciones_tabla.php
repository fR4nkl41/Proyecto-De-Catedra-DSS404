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
        Schema::create('INSCRIPCIONES', function (Blueprint $table) {
            $table->id('id_inscripcion');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_plan');
            $table->date('fecha_inicio');
            $table->string('estado')->default('Activa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripciones_tabla');
    }
};
