<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informacioncentro extends Model {
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'direccion',
        'correo',
        'telefono',
        'youtube',
        'instagram',
        'facebook',
    ];
}
