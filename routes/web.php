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
    return view('Inicio');
});
Route::get('/Detalles', function () {
    return view('Detalles');
});
Route::get('/Listado', function () {
    return view('Listado');
});
Route::get('/Solicitud', function () {
    return view('Solicitud');
});
