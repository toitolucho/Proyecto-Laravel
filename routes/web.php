<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPrueba;
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


// Route::get('foo', function () {
//     return 'Hello World';
// });


Route::get('/','ControllerPrueba@index')->name('prueba.index');

Route::get('/ejemplo2','ControllerPrueba@ejemplo2')->name('prueba.ejemplo2');

Route::post('/ejemplo2_res','ControllerPrueba@ejemplo2_res')->name('prueba.ejemplo2_res');


Route::get('/digitToLetter','ControllerMathFunctions@digitToLetter')->name('digitToLetter');
Route::post('/digitToLetter_res','ControllerPrueba@digitToLetter_res')->name('digitToLetter_res');

Route::get('/maxOfThreeValues','ControllerMathFunctions@maxOfThreeValues')->name('maxOfThreeValues');
Route::post('/maxOfThreeValues','ControllerPrueba@maxOfThreeValues_res')->name('maxOfThreeValues_res');


// Route::get('/','ControllerPrueba@index')->name('prueba.index');
// Route::get('/ejemplo2','ControllerPrueba@ejemplo2')->name('prueba.ejemplo2');

// Route::post('/ejemplo2_res','ControllerPrueba@ejemplo2_res')->name('prueba.ejemplo2_res');

// Route::get('/users', [ControllerPrueba::class, 'index']);
// // or
// Route::get('/Prueba', 'App\Http\Controllers\UserController@index');

// Route::get('/ejemplo2','App\Http\Controllers\ControllerPrueba@ejemplo2')->name('prueba.ejemplo2');
// Route::post('/ejemplo2_res', 'App\Http\Controllers\ControllerPrueba@ejemplo2_res')->name('prueba.ejemplo2_res');
