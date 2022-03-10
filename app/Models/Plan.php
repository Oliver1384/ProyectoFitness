<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Plan extends Model
{
    use HasFactory;
    protected $table = "planes";
    protected $fillable = [
        'id',
        'titulo',
        'descripcion',
        'imagen',
        'user_id'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
