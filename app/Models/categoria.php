<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categoria;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'ID_Categoria'; // Establece la llave primaria

    protected $fillable = [
        'Nombre_CAT',
        'Descripcion_CAT',
    ]; 
}


/* class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias'; // Nombre de la tabla
    protected $primaryKey = 'ID_Categoria'; // Nombre de la clave primaria
     // Relación uno a muchos (una categoría tiene muchos productos)
     
     public function productos()
     {
         return $this->hasMany(Producto::class, 'ID_Categoria', 'ID_Categoria');
     }
    /*public $timestamps = false; // Si tu tabla no tiene columnas 'created_at' y 'updated_at'
}*/
