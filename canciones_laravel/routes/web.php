<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
    //     return view('welcome');
    // });
    // Usa el "USE" para definir la url y en la funcion de "ROUTE" pasa como parametro solo el "CancionController" en vez de toda la ruta
    use App\Http\Controllers\CancionController;
Route :: get('/', [CancionController::class, 'index'])->name('inicio');

// Envion al formulario
Route :: view('/agregar','nueva_cancion')->name('formAgregar');
// Envio los datos del formulario
Route :: post('/agregar', [CancionController::class,'agregarCancion'])->name('agregarCancion');

Route :: get('/eliminar/{id}', [CancionController::class,'eliminarCancion'])->name('eliminarCancion');

Route :: get('/editar/{id}', [CancionController::class,'editarCancion'])->name('editarCancion');

Route :: post('/actualizar', [CancionController::class, 'actualizarCancion'])->name('actualizarCancion');
