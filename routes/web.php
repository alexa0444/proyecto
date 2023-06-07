<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\EstudiantController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;



 
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


Route::resource('libros', LibroController::class);
Route::resource('prestamos', PrestamoController::class);
Route::resource('estudiantes', EstudianteController::class);
Route::get('/librostotales', [App\Http\Controllers\LibroController::class, 'librostotales'])->name('librostotales');
Route::get('/prestamostotales', [App\Http\Controllers\PrestamoController::class, 'prestamosT'])->name('prestamostotales');

Route::get('/prestamos/aceptar/{id}', [App\Http\Controllers\PrestamoController::class, 'aceptar'])->name('prestamos.aceptar');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');