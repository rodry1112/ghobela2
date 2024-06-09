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
        Schema::create('productos', function(Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->string('genero');
            $table->boolean('visible');
            $table->string('temporada');
            $table->string('imagen');
            $table->boolean('activo');
            $table->date('fechaEliminacion')->nullable(true);
            $table->boolean('destacado');
            $table->boolean('novedad');
            $table->string('numeroSerie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
