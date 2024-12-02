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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('ID_Producto'); // Primary key
            $table->string('Descripcion_PDT');
            $table->unsignedBigInteger('ID_Categoria'); // Foreign key
            $table->unsignedBigInteger('ID_Proveedor'); // Foreign key
            $table->decimal('Precio_Compra_PDT', 10, 2);
            $table->decimal('Precio_Venta_PDT', 10, 2);
            $table->integer('Stock_Minimo_PDT');
            $table->string('Imagen_PDT')->nullable(); // Ruta de imagen
            $table->timestamps();
    
            // Definir las relaciones de llave foránea
            $table->foreign('ID_Categoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('ID_Proveedor')->references('id')->on('proveedores')->onDelete('cascade');
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
