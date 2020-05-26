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
    return view('welcome');
});

Route::get('/events', 'PizzaController@index' )->name('events.index')->middleware('auth');
Route::get('/events/create', 'PizzaController@create')->name('events.create'); 
Route::post('/events', 'PizzaController@store')->name('events.store');    
Route::get('/events/{id}', 'PizzaController@show')->name('events.show')->middleware('auth');    
Route::delete('/events/{id}', 'PizzaController@destroy')->name('events.destroy')->middleware('auth');




Auth::routes(
    //['register' => false]
);

Route::get('/home', 'HomeController@index')->name('home');

//fullcalender

Route::get('/fullcalendareventmaster','FullCalendarEventMasterController@index');

Route::post('/fullcalendareventmaster/create','FullCalendarEventMasterController@create');

Route::post('/fullcalendareventmaster/update','FullCalendarEventMasterController@update');

Route::post('/fullcalendareventmaster/delete','FullCalendarEventMasterController@destroy');