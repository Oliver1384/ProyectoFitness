<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $table = "planes";
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id'
    ];
}
