<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use App\Models\Labor;
use App\Models\Role;
use App\Models\Sede;
use App\Models\Turno;
use App\Models\Unidad;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){

        $turns = Turno::count();
        $empleados = Empleado::count();
        $roles = Role::count();
        $labores = Labor::count();
        $sedes = Sede::count();
        $unidades = Unidad::count();

        return view('admin.index', compact('turns', 
                                            'empleados', 'roles', 'labores', 
                                            'sedes', 'unidades'));
    }
}
