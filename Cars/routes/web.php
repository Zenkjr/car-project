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

Route::resource('cars', 'CarController');
Route::get('/mua-xe', 'CarController@muaxe');
Route::get('/lienhe', 'CarController@lienhe');
<<<<<<< HEAD
Route::get('/detail', 'CarController@detail');
=======
>>>>>>> 76a8041979e4108c3ee84cb12cb498bc7bf007a5
