<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SexoController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\LibroController;

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
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('home');
});


//Ruta del contorlador de sexos
Route::get('/sexos', function () {
    return view('sexos.index');
});
Route::resource('sexos', SexoController::class);

//Ruta del contolador de autores
Route::get('/autores', function () {
    return view('autores.index');
});
Route::resource('autores', AutorController::class);

//Ruta del controlador de idioma
Route::get('/idiomas', function () {
    return view('idiomas.index');
});
Route::resource('idiomas', IdiomaController::class);

//Ruta del controlador de categoria
Route::get('/categorias', function () {
    return view('categorias.index');
});
Route::resource('categorias', CategoriaController::class);

//Ruta del contolador de libro
Route::get('/libros', function () {
    return view('libros.index');
});
Route::resource('libros', LibroController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
