<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\producto;
use App\Models\categoria;
use App\Models\proveedor;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'ID_Producto'; // Establece la llave primaria
    public $incrementing = true; // Si es una clave auto incremental
    protected $keyType = 'int'; // Tipo de la clave primaria

    /* Definir la relación inversa con el modelo Categoria, proveedor
    public function categoria()
    {
        return $this->hasMany(Categoria::class, 'ID_Categoria');
    }
    public function proveedor()
    {
        return $this->hasMany(Proveedor::class, 'ID_Proveedor');
    }*/

    protected $fillable = [
        'Descripcion_PDT',
        'ID_Categoria',
        'ID_Proveedor',
        'Precio_Compra_PDT',
        'Precio_Venta_PDT',
        'Stock_Minimo_PDT',
        'Imagen_PDT',
    ];
    
    public function categoria()
    {
        // La clave foránea en la tabla productos es ID_Categoria
        // La clave primaria en la tabla categorias es ID_Categoria
        return $this->belongsTo(Categoria::class, 'ID_Categoria', 'ID_Categoria');
    }

    public function proveedor()
    {
         // Relación con el modelo Proveedor
        return $this->belongsTo(Proveedor::class, 'ID_Proveedor', 'ID_Proveedor');
    }


}
