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

//Route::get('/secure', 'EventController@index')->name('event.index');
// Route::put('/secure/{event}', 'EventController@update')->name('event.update');



Route::resource('/event', EventController::class);
Route::get('/agent', 'ContragentController@create');
