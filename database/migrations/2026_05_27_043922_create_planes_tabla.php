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
        Schema::create('PLANES', function (Blueprint $table) {
            $table->id('id_plan');
            $table->string('nombre_plan');
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planes_tabla');
    }
};
