<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
        public function up()
        {
            Schema::create('entradas', function (Blueprint $table) {
                $table->id('ID_Entrada'); // Clave primaria
                $table->unsignedBigInteger('ID_Producto'); // Clave foránea hacia productos
                $table->unsignedBigInteger('ID_Proveedor'); // Clave foránea hacia proveedores
                $table->integer('Cantidad_ENT'); // Cantidad
                $table->date('Fecha_Entrada_ENT'); // Fecha de entrada
                $table->string('Numero_Factura_ENT'); // Número de factura
                $table->timestamps(); // created_at y updated_at
    
                // Claves foráneas
                $table->foreign('ID_Producto')->references('ID_Producto')->on('productos')->onDelete('cascade');
                $table->foreign('ID_Proveedor')->references('ID_Proveedor')->on('proveedores')->onDelete('cascade');
            });
        }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entradas');
    }
};
