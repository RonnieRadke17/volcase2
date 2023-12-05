<?php

use Illuminate\Support\Facades\Route;
//faltan las rutas de trabajo y registros y de usuarios
//también de las que redirecciona si eres admin
use App\Http\Controllers\TrabajoController;
use App\Http\Controllers\mostrarTrabajadoresController;
use App\Http\Controllers\TrabajosController;

Route::get('/administrador', [mostrarTrabajadoresController::class, 'index']);//según ya

//se buguea
//Route::get('/trabajador', [mostrarTrabajosController::class, 'index']);//no mover ya muestra los trabajos

Route::resource('trabajador',TrabajosController::class);//no le muevas nada we
//no borrar// este me muestra el registro específico
Route::get('/trabajador/{id}', [TrabajadorController::class, 'show'])->name('trabajador.show');



Route::resource('trabajo',TrabajoController::class);//ya

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
