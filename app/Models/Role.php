<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Relación uno a muchos
    public function empleados(){
        return $this->hasMany(Empleado::class);
    }
}
