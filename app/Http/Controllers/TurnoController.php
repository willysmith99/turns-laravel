<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turno;
use App\Models\Empleado;

class TurnoController extends Controller
{
        public function index (){
            $turns = Turno::paginate(10);

            return view('turno.index', compact('turns'));
        }


}
