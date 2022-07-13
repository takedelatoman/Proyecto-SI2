<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micro extends Model
{
    use HasFactory;
    protected $table = 'micro'; //usa el nombre de la base de datos 
    protected $fillable = [
        'placa',
        'modelo',
        'cant_asiento',
        'num_interno',
        'foto',
        'fecha_asignacion',
        'fecha_baja',
        'disponible',
        'id_linea',
        'id_user'

    ];

    public function linea(){
        return $this->belongsTo(Linea::class,'id_linea');
    }
    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
}
