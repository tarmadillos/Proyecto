<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\proyecto;


class proveedor extends Model
{
    use HasFactory;
    //
    protected $fillable = ['Nombre_PVD'];
}
