<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\proveedor;

class proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores'; // Nombre de la tabla
    protected $primaryKey = 'ID_Proveedor'; // Llave primaria
    public $incrementing = true; // Clave auto-incremental
    protected $keyType = 'int'; // Tipo de dato de la clave primaria
    
    protected $fillable = [
        'Nombre_PVD',
        'Contacto_PVD',
        'Telefono_PVD',
        'Email_PVD',
    ];
}
