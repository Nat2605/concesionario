<?php

use App\Http\Controllers\CocheController;
use App\Http\Controllers\RegistroUsuariosController;
use App\Models\Coche;
use Illuminate\Support\Facades\Cache;
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
    return view('inicio', ['coches']);
});
Route::get('/detalles/{id}', [CocheController::class, 'detalles'])->whereAlpha('coches');

Route::get('/listado', [CocheController::class, 'filtrar']);

Route::get('/solicitud', function () {
    return view('solicitud');
});

Route::get('/mi_concesionario', function () {
    return view('mi_concesionario');
})->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::post('/login', [RegistroUsuariosController::class, 'acceder'])->middleware('guest');


Route::get('/registrar', function () {
    return view('registrar');
})->name('')->middleware('guest');

Route::post('/registrar', [RegistroUsuariosController::class, 'validar'])->middleware('guest');

Route::get('/cerrar_sesion', [RegistroUsuariosController::class, 'logOut'])->middleware('auth');
