<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    use HasFactory;
    protected $table = 'linea'; //usa el nombre de la base de datos 
    protected $fillable = [
        'numero',
        'direccion',
        'foto'
    ];


    public function micro(){
        return $this->hasMany(Micro::class,'id_linea');
    }

    public function puntoruta()
    {
        return $this->hasMany(PuntoRuta::class,'id_linea');
    }
}
