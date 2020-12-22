<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreOferta',
        'idCategoria',
        'tiempoDiarioOfrece',
        'fechaPuedeIniciar',
        'fechaDebeAcabar',
        'fotoOferta',
        'idUser'
    ];
}
