<?php

use App\Http\Controllers\CocheController;
use App\Http\Controllers\MarcaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/marcas', [MarcaController::class, 'index']);
Route::get('/coches', [CocheController::class, 'datosCoche']);
Route::get('/coche/{id}', [CocheController::class, 'detallesCoche']);
