<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\producto;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $primaryKey = 'ID_Producto';

    protected $fillable = [
        'Descripcion_PDT',
        'ID_Categoria',
        'ID_Proveedor',
        'Precio_Compra_PDT',
        'Precio_Venta_PDT',
        'Stock_Minimo_PDT',
        'Imagen_PDT',
    ];
}
