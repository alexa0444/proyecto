<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\EstudiantController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProductoController;
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
//Route::get('/solicitar', [App\Http\Controllers\EstudiantController::class, 'index'])->name('solicitar');
//Route::get('/totales', [App\Http\Controllers\LibroController::class, 'librosT'])->name('librostotales');
Route::get('/librosindex', [App\Http\Controllers\LibroController::class, 'pag'])->name('librosindex.principal');
Route::get('/libros', [App\Http\Controllers\LibroController::class, 'libros'])->name('libros');



// Route::get('/libros', function () {
//     return view('libros.principal');
// });



// routes/web.php


// Route::get('/prestamo', 'PrestamoestudiantController@showForm');
// Route::post('/prestamo', 'PrestamoestudiantController@store');

Route::get('/solicitar', [App\Http\Controllers\PrestamoestudiantController::class, 'showForm'])->name('solicitar');
Route::post('/solicitar', [App\Http\Controllers\PrestamoestudiantController::class, 'store'])->name('guardar_prestamo');



Auth::routes();



Route::get('/calendario', [App\Http\Controllers\EventoController::class, 'index'])->name('calendario');
Route::get('/calendario/form', [App\Http\Controllers\EventoController::class, 'form'])->name('calendarioform');
Route::post('/calendario/create', [App\Http\Controllers\EventoController::class, 'create'])->name('calendariocreate');
Route::get('Evento/details/{id}', [App\Http\Controllers\EventoController::class, 'details'])->name('calendariodetalle');
Route::get('Evento/index/{month}', [App\Http\Controllers\EventoController::class, 'index_month'])->name('calendariomes');
Route::delete('/eventos/{id}',  [App\Http\Controllers\EventoController::class, 'delete'])->name('eventos.delete');


Route::resource('producto', ProductoController::class);
Route::resource('compra', CompraController::class);


// Route::get('/compra/crear/{nombre}/{precio}', [App\Http\Controllers\CompraController::class, 'create'])->name('compra.create');
// Route::post('compra/store', [App\Http\Controllers\CompraController::class, 'store'])->name('compra.store');
// Route::get('/compra/index}', [App\Http\Controllers\CompraController::class, 'index'])->name('compra.index');




Route::get('/ver', function () {
    return view
    ('productos');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('tareas', tareaController::class);



Route::get('/tareas', [TareaController::class, 'index'])->name('tareas.index');
Route::get('/tareas/realizadas', [TareaController::class, 'index'])->name('tareas.realizadas')->defaults('estado', 'realizadas');
Route::get('/tareas/pendientes', [TareaController::class, 'index'])->name('tareas.pendientes')->defaults('estado', 'pendientes');
