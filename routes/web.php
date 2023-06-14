<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VistaSController;
use App\Http\Controllers\EventoController;

use App\Models\tareas;
use App\Http\Controllers\tareaController;



 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');








Auth::routes();



Route::get('/calendario', [App\Http\Controllers\EventoController::class, 'index'])->name('calendario');
Route::get('/calendario/form', [App\Http\Controllers\EventoController::class, 'form'])->name('calendarioform');
Route::post('/calendario/create', [App\Http\Controllers\EventoController::class, 'create'])->name('calendariocreate');
Route::get('Evento/details/{id}', [App\Http\Controllers\EventoController::class, 'details'])->name('calendariodetalle');
Route::get('Evento/index/{month}', [App\Http\Controllers\EventoController::class, 'index_month'])->name('calendariomes');
Route::delete('/eventos/{id}',  [App\Http\Controllers\EventoController::class, 'delete'])->name('eventos.delete');

Route::get('/vista-semanal',[App\Http\Controllers\VistaSController::class, 'vistaSemanal'])->name('vistasemanal');
Route::post('/agregar-tarea', [App\Http\Controllers\VistaSController::class, 'agregarTarea'])->name('vistasemanal.agregar');
Route::delete('/vistasemanal/completar/{id}', [VistaSController::class, 'completarTarea'])
    ->name('vistasemanal.completar');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('tareas', tareaController::class);



Route::get('/tareas', [TareaController::class, 'index'])->name('tareas.index');
Route::get('/tareas/realizadas', [TareaController::class, 'index'])->name('tareas.realizadas')->defaults('estado', 'realizadas');
Route::get('/tareas/pendientes', [TareaController::class, 'index'])->name('tareas.pendientes')->defaults('estado', 'pendientes');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
