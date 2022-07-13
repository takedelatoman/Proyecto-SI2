<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuntoRuta extends Model
{
    use HasFactory;
    protected $table = 'puntoruta'; //usa el nombre de la base de datos 
    protected $fillable = [
        'latitud',
        'altitud',
        'id_linea'
    ];

    public function linea()
    {
        return $this->belongsTo(Linea::class,'id_linea');
    }
}
