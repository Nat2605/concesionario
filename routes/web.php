<?php

use App\Models\Coche;
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
    $coches = Coche::all();
    dump($coches);
    return view('inicio');
});
Route::get('/detalles/{id}', function ($id) {
    $coche = Coche::find($id);
    return view('detalles', ['coche' => $coche]);
});
Route::get('/listado', function () {
    return view('listado');
});
Route::get('/solicitud', function () {
    return view('solicitud');
});
