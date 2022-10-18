<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    // Relación uno a muchos inversa
    public function roles(){
        return $this->belongsTo(Role::class);
    }

    // Relación uno a muchos
    public function turnos(){
        return $this->hasMany(Turno::class);
    }


}
