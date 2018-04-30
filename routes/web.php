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

use Illuminate\Support\Facades\Route;

Route::get('/', 'ProgrammingController@lists')->name('index');
Route::get('/programming', 'ProgrammingController@lists')->name('programming');
Route::get('/plant', 'PlantController@lists')->name('plant');
Route::get('/poem', 'PoemController@lists')->name('poem');
Route::get('/programming/{plug}', 'ProgrammingController@plug')->name('p-article');
