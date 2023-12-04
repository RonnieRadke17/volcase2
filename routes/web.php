<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajoController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VistaTareasController;

Route::resource('trabajador',VistaTareasController::class);
Route::resource('calendarios',CalendarioController::class);
Route::resource('trabajos',TrabajoController::class);

// routes/web.php

//se pone la ruta en la cual se muestran todos los trabajadores 
Route::get('/administrador', [UserController::class, 'index'])->name('admin.index');


//Route::view('/administrador','admin.index')->name('admin.index');


//Route::view('/trabajador','trabajador.index')->name('trabajador.index');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
