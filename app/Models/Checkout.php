<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_checkin',
        'id_recepcionista',
        'descripcion_salida',
    ];

    protected $collection = "Checkouts";

    public function recepcionista (){
        return $this->belongsTo(User::class, 'id_recepcionista');
    }

    public function checkin (){
        return $this->belongsTo(Checkin::class, 'id_checkin');
    }

}
