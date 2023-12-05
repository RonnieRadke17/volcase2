<?php

use Illuminate\Support\Facades\Route;
//faltan las rutas de trabajo y registros y de usuarios
//también de las que redirecciona si eres admin
use App\Http\Controllers\TrabajoController;
//use App\Http\Controllers\mostrarTrabajosController;// se buguea
//admin le tiene que cargar el de trabajo y a trabajador el de trabajador jsjs
//falta que el trabajador pueda hacer un update el cual marque la tarea como completada y actulice el comentario
//falta que el trabajador pueda registrar su fecha y hora de entrada
//falta que el admin pueda ver el registro de todos los trabajadores
use App\Http\Controllers\mostrarTrabajadoresController;
use App\Http\Controllers\TrabajosController;

Route::get('/administrador', [mostrarTrabajadoresController::class, 'index']);//según ya

//se buguea
//Route::get('/trabajador', [mostrarTrabajosController::class, 'index']);//no mover ya muestra los trabajos
Route::resource('trabajador',TrabajosController::class);//horita vemos


Route::resource('trabajo',TrabajoController::class);//ya

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
