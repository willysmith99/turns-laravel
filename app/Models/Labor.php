<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labor extends Model
{
    use HasFactory;

    // Relación uno a muchos
    public function turnos(){
        return $this->hasMany(Turno::class);
    }
}
