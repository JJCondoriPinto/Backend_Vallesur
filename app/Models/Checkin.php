<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;



class Checkin extends Model
{
    use HasFactory;

    protected $collection = "Checkins";
    protected $fillable = [
        'id_reserva',
        'id_recepcionista',
        'paxs',
        'fecha_ingreso',
        'nota_adicionales',
        'estado',
    ];
    public function recepcionista (){
        return $this->belongsTo(User::class, 'id_recepcionista');
    }

    public function reserva (){
        return $this->belongsTo(Reserva::class, 'id_reserva');
    }

}
