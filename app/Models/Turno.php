<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    // Relación uno a muchos inversa
    public function empleados(){
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

     // Relación uno a muchos inversa
     public function labores(){
        return $this->belongsTo(Labor::class);
    }

    // Relación uno a uno inversa
    public function sedes(){
        return $this->belongsTo(Sede::class, 'sede_id');
    }

}
