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
    var_dump($coches);
    return view('inicio');
});
Route::get('/detalles/{coche:modelo}', function (Coche $coche) {
    return view('detalles', ['coches' => [$coche]]);
})->whereAlpha('coches');

Route::get('/listado', function () {
    $coches = Coche::all();
    return view('listado', ['coches' => $coches]);
});
Route::get('/solicitud', function () {
    return view('solicitud');
});
