<?php

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

Route::get('/sql', 'Controller@createDB');

Route::get('/insert', 'Controller@insert');

Route::get('/get_table_data', 'ApiController@data');