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
     
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('ID_Proveedor'); // Primary key
            $table->string('Nombre_PVD');
            $table->string('Contacto_PVD');
            $table->string('Telefono_PVD');
            $table->string('Email_PVD');
            $table->timestamps();
             
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
