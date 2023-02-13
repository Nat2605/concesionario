<?php

use App\Http\Controllers\CocheController;
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
