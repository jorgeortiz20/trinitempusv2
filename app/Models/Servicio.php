<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'idOferta',
        'idUserSolicita',
        'estadoSolicitud',
        'minutosSolicitados',
        'fechaInicio',
        'fechaFinal',
        'comentario',
        'puntuacion',
    ];


}
