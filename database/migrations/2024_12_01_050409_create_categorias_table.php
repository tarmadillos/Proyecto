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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id('ID_Categoria'); // Primary key
            $table->string('Nombre_CAT');
            $table->text('Descripcion_CAT')->nullable();
            $table->timestamps();
    
            /*/ Definir las relaciones de llave foránea
            $table->foreign('ID_Categoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('ID_Proveedor')->references('id')->on('proveedores')->onDelete('cascade'); */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
