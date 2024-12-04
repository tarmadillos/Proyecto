<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\producto;
use App\Models\categoria;

class Producto extends Model
{
    use HasFactory;

    public function categoria()
    {
        // La clave foránea en la tabla productos es ID_Categoria
        // La clave primaria en la tabla categorias es ID_Categoria
        return $this->belongsTo(Categoria::class, 'ID_Categoria', 'ID_Categoria');
    }
    
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
