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

Route::get('/', function () {
    return view('welcome');
});

//CLIENTE
Route::get('/clientes',[App\Http\Controllers\ClienteController::class, 'index']);
Route::get('/cliente/{id}',[App\Http\Controllers\ClienteController::class, 'detalle']);
Route::get('/clientes/captura',[App\Http\Controllers\ClienteController::class, 'captura']);
Route::post('/clientes/almacenar',[App\Http\Controllers\ClienteController::class, 'almacenar']);
Route::get('cliente/cambiar/{id}',[App\Http\Controllers\ClienteController::class,'cambiar']);
Route::post('/clientes/actualizar/{id}',[App\Http\Controllers\ClienteController::class,'actualizar']);
Route::get('cliente/eliminar/{id}',[App\Http\Controllers\ClienteController::class,'eliminar']);

//PEDIDOS
Route::get('/pedidos',[App\Http\Controllers\PedidoController::class, 'index']);
Route::get('/pedido/{id}',[App\Http\Controllers\PedidoController::class, 'detalle']);
Route::get('/pedidos/captura',[App\Http\Controllers\PedidoController::class, 'captura']);
Route::post('/pedidos/almacenar',[App\Http\Controllers\PedidoController::class, 'almacenar']);
Route::post('/pedidos/almacen',[App\Http\Controllers\PedidoController::class, 'almacen']);
Route::get('pedido/cambiar/{id}',[App\Http\Controllers\PedidoController::class,'cambiar']);
Route::post('/pedidos/actualizar/{id}',[App\Http\Controllers\PedidoController::class,'actualizar']);
Route::get('/pedido/libro/{id}',[App\Http\Controllers\PedidoController::class,'misLibros']);
Route::get('pedido/eliminar/{id}',[App\Http\Controllers\PedidoController::class,'eliminar']);

//LIBROS
Route::get('/libros',[App\Http\Controllers\LibroController::class, 'index']);
Route::get('/libro/{id}',[App\Http\Controllers\LibroController::class, 'detalle']);
Route::get('/libros/captura',[App\Http\Controllers\LibroController::class, 'captura']);
Route::post('/libros/almacenar',[App\Http\Controllers\LibroController::class, 'almacenar']);
Route::get('libro/cambiar/{id}',[App\Http\Controllers\LibroController::class,'cambiar']);
Route::post('/libros/actualizar/{id}',[App\Http\Controllers\LibroController::class,'actualizar']);
Route::get('libro/eliminar/{id}',[App\Http\Controllers\LibroController::class,'eliminar']);

//EDITORIAL
Route::get('/editoriales',[App\Http\Controllers\EditorialController::class, 'index']);
Route::get('/editorial/{id}',[App\Http\Controllers\EditorialController::class, 'detalle']);
Route::get('/editoriales/captura',[App\Http\Controllers\EditorialController::class, 'captura']);
Route::post('/editoriales/almacenar',[App\Http\Controllers\EditorialController::class, 'almacenar']);
Route::get('editorial/cambiar/{id}',[App\Http\Controllers\EditorialController::class,'cambiar']);
Route::post('/editoriales/actualizar/{id}',[App\Http\Controllers\EditorialController::class,'actualizar']);
Route::get('editorial/eliminar/{id}',[App\Http\Controllers\EditorialController::class,'eliminar']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/inicio', [App\Http\Controllers\InicioController::class, 'index'])->name('inicio');
Route::get('/libros2', [App\Http\Controllers\Libro2Controller::class, 'index'])->name('libros2');
