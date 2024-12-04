<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    use HasFactory;

    protected $table = 'salidas';
    protected $primaryKey = 'ID_Salida';

    protected $fillable = [
        'ID_Producto',
        'Cantidad_SAL',
        'Fecha_Salida_SAL',
        'Motivo_ENUM',
    ];

    // Relación con productos
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'ID_Producto', 'ID_Producto');
    }
}