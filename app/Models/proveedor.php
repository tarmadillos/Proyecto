<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\proveedor;

class proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';
    protected $primaryKey = 'ID_Proveedor';
    
    protected $fillable = [
        'Nombre_PVD',
        'Contacto_PVD',
        'Telefono_PVD',
        'Email_PVD',
    ];
}
