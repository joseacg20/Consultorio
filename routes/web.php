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
    return view('home');
});

Route::get('foo', function () {
    return 'HELLO WORD';
});

//Rutas para el Administrador
Route::resource('/administradores', 'AdminController')->middleware('auth', 'roleAdmin');
Route::match(['get', 'head'], '/administrador/assign', 'AdminController@assign')->name('assign')->middleware('auth','roleAdmin');
Route::post('/administrador/assign/create', 'AdminController@storeRole')->name('assigncreate')->middleware('auth','roleAdmin');

//Rutas para Historias Clinicas
Route::resource('historias', 'HistoryController')->middleware('auth','roleDoctor');
Route::get('/historia/{id}', 'HistoryController@showStories')->name('hist')->middleware('auth','roleDoctor');
Route::match(['get', 'head'], '/historia/create/{id}', 'HistoryController@createStories')->name('histcreate')->middleware('auth','roleDoctor');
Route::get('/historias/pdf/{id}', 'HistoryController@createPDF')->name('histpdf')->middleware('auth','roleDoctor');

//Rutas para Evoluciones
Route::resource('evoluciones', 'EvolutionController')->middleware('auth','roleDoctor');
Route::get('/evolucion/{id}', 'EvolutionController@showEvolutions')->name('evo')->middleware('auth','roleDoctor');
Route::match(['get', 'head'], '/evolucion/create/{id}', 'EvolutionController@createEvolutions')->name('evocreate')->middleware('auth','roleDoctor');
Route::get('/evoluciones/pdf/{id}', 'EvolutionController@createPDF')->name('evopdf')->middleware('auth','roleDoctor');

//Rutas para que un paciente consulte sus expedientes
Route::match(['get', 'head'], 'paciente', 'QueryController@index')->name('patient');
Route::post('/paciente', 'QueryController@findPatient')->name('findpatient');
Route::match(['get', 'head'], '/paciente/historia/{id}', 'QueryController@showHistorys')->name('morehist');
Route::match(['get', 'head'], '/paciente/evolucion/{id}', 'QueryController@showHEvolutions')->name('moreevo');

//Rutas
Route::resource('/notas', 'NoteController')->middleware('auth', 'roleSecretary');
Route::resource('/doctores', 'DoctorController')->middleware('auth', 'roleAdmin');
Route::resource('/pacientes', 'PatientController')->middleware('auth', 'roleDoctor');
Route::resource('/secretarias', 'SecretaryController')->middleware('auth', 'roleAdmin');
Route::get('/expediente/{id}', 'FileController@index')->name('file')->middleware('auth','roleDoctor');

Route::match(['get', 'head'], 'role/asignar', 'AdminController@asignar')->name('role');
Route::post('role/asignar/{id}', 'AdminController@asignar_role')->name('asrole');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');