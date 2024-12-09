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
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id('id_direccion'); // Llave primaria
            $table->unsignedBigInteger('id_usuario'); // Llave foránea
            $table->string('ciudad');
            $table->string('estado');
            $table->string('numero_casa');
            $table->string('codigo_postal');
            $table->string('calle');
            $table->timestamps();
        
            // Relación foránea corregida
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        });
        
        
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direcciones');
    }
};
