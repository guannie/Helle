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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/patientrecord', 'PatientController@index');

Route::get('/newpatient', 'PatientController@create');

Route::post('/show{id}', 'PatientController@show');

Route::get('delete/{id}', [
	'as'   => 'delete',
	'uses' => 'PatientController@delete'
	]);


Route::get('edit/{id}', [
	'as'   => 'edit',
	'uses' => 'PatientController@edit'
	]);

Route::post('edit_process', [
	'as'   => 'edit_process',
	'uses' => 'PatientController@edit_process'
	]);

Route::get('patientInfo_create', [  /*student link, unique*/
	'as' => 'patientInfo_create', /*name shortform, nak pggl gne niyh*/
	'uses' => 'patientInfoController@patientInfo_create',  /*name controller, ikut ape yg kita nak@name function*/
	]); /*return form*/

Route::post('patientInfo_create_process', [  /*student link, unique*/
	'as' => 'patientInfo_create_process', /*name shortform, nak pggl gne niyh*/
	'uses' => 'patientInfoController@patientInfo_create_process',  /*name controller, ikut ape yg kita nak@name function*/
	// 'middleware' => ['auth', 'admin']
	]); /*return form*/
