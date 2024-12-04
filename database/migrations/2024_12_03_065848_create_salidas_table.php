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
        Schema::create('salidas', function (Blueprint $table) {
            $table->id('ID_Salida'); // Primary key
            $table->unsignedBigInteger('ID_Producto'); // Foreign key
            $table->integer('Cantidad_SAL'); // Cantidad de salida
            $table->date('Fecha_Salida_SAL'); // Fecha de salida
            $table->enum('Motivo_ENUM', ['Venta', 'Donación', 'Desperdicio', 'Otro']); // Motivo
            $table->timestamps(); // created_at, updated_at

            // Relación con productos
            $table->foreign('ID_Producto')->references('ID_Producto')->on('productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salidas');
    }
};
