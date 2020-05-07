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
    return view('home');
});

/*Route::get('/visitante', function () {
    return view('Visitante');
});

Route::get('/areas', function () {
    return view('AreaRecreativa');
});
Route::get('/encargado', function () {
    return view('Encargado');
});*/


Route::resource('visitante', 'VisitanteController');
<<<<<<< HEAD
Route::resource('encargado', 'EncargadoController');
=======
Route::resource('areas', 'AreasController');
>>>>>>> fbd98f5d795074b86080ccd71302db9e3f45540e
