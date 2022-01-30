<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Operadores extends Model
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'nombre',
        'licencia',
        'correo',
        'app_usr',
        'app_pass'
    ];

    

}
