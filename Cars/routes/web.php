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

Route::resource('cars', 'FontEndController');
Route::get('/mua-xe', 'FontEndController@muaxe');
Route::get('/lienhe', 'FontEndController@lienhe');
Route::get('/detail', 'FontEndController@detail');

Route::get('/tin-tuc', 'FontEndController@article');
