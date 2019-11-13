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

//Pacientes
Route::get('patientsAll', 'PatientsController@showAll');
Route::get('patientsLogin', 'PatientsController@login');
Route::resource('patients', 'PatientsController');

//Menu
Route::get('menuGet/{id}', 'MenuController@getMenu');
Route::delete('menuDestroy/{id}','MenuController@destroyAll');
Route::resource('menu', 'MenuController');
Route::get('patientsAll', 'PatientsController@showAll');
Route::get('patientsLogin', 'PatientsController@login');
Route::resource('patients', 'PatientsController');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
