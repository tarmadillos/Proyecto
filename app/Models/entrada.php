<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrada extends Model

    //
{
    use HasFactory;

    protected $table = 'entradas'; // Nombre de la tabla
    protected $primaryKey = 'ID_Entrada'; // Clave primaria personalizada

    protected $fillable = [
        'ID_Producto',
        'ID_Proveedor',
        'Cantidad_ENT',
        'Fecha_Entrada_ENT',
        'Numero_Factura_ENT',
    ];

    // Relación con el modelo Producto
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'ID_Producto', 'ID_Producto');
    }

    // Relación con el modelo Proveedor
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'ID_Proveedor', 'ID_Proveedor');
    }
}