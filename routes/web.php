<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('empresas', [EmpresasController::class, 'index']);

Route::get('empresas/nuevo', [EmpresasController::class, 'nuevo']);

Route::get('empresas/editar/{id}', [EmpresasController::class, 'editar']);

Route::get('empresas/borrar/{id}', [EmpresasController::class, 'borrar']);

Route::post('empresas', [EmpresasController::class, 'guardar_nuevo']);

Route::put('empresas/{id}', [EmpresasController::class, 'guardar_editar']);