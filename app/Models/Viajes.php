<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viajes extends Model
{
    use HasFactory;
    public function operador()
    {
        return $this->hasOne(Operadores::class);
    }

    public function vehiculo()
    {
        return $this->hasOne(Vehiculos::class);
    }


}
