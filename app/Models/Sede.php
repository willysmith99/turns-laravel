<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    // Relación uno a muchos inversa
    public function unidades(){
        return $this->belongsTo(Unidad::class);
    }

    // Relación uno a uno
    public function turnos(){
        return $this->hasOne(Turno::class);
    }
}
