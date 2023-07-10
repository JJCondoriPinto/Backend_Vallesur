<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $fillable=[
        'nro_habitacion',
        'nro_piso',
        'tipo_habitacion',
        'precio',
        'estado',
        'tamaño',
        'caracteristicas',
        'imagen',
        'reservado_desde',
        'reservado_hasta',
    ];
    protected $collection = "Habitaciones";
}
