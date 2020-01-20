<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Pacientes
Route::get('patientsAll', 'PatientsController@showAll');
Route::get('patientsLogin/{url}', 'PatientsController@login');
Route::resource('patients', 'PatientsController');
Route::get('patientshash', 'PatientsController@hashPasswords');
//Menu
Route::get('menuGet/{id}', 'MenuController@getMenu');
Route::delete('menuDestroy/{id}','MenuController@destroyAll');
Route::resource('menu', 'MenuController');

//Routines

Route::get('routinesAll', 'RoutinesController@showAll');
Route::get('routinesLunes/{id}', 'RoutinesController@getLunesId');
Route::get('routinesMartes/{id}', 'RoutinesController@getMartesId');
Route::get('routinesMiercoles/{id}', 'RoutinesController@getMiercolesId');
Route::get('routinesJueves/{id}', 'RoutinesController@getJuevesId');
Route::get('routinesViernes/{id}', 'RoutinesController@getViernesId');
Route::get('routinesSabado/{id}', 'RoutinesController@getSabadoId');
Route::get('routinesDomingo/{id}', 'RoutinesController@getDomingoId');

Route::get('documents/{id}/{url}', 'api@getDocuments');
Route::get('images/{id}/{url}', 'api@getImages');
Route::get('routines/{id}/{url}', 'api@awa');
Route::get('recipes/{id}/{url}', 'api@getRecipes');
Route::post('postDoc/{url}', 'api@pdfPost');

