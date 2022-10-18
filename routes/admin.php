<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TurnoController;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('turnos', TurnoController::class)->names('admin.turnos');