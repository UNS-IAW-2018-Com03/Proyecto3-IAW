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

Route::get('/', 'PanelController@index');

Route::resource('reclamo','ReclamoController');

Route::get('/tablaDeReclamos', 'PanelController@tabla')->name('tablaDeReclamos');

Route::get('/tablaDeReclamos/{id}/setPendiente', 'PanelController@setPendiente');

Route::get('/tablaDeReclamos/{id}/setProceso', 'PanelController@setProceso');

Route::get('/tablaDeReclamos/{id}/setFinalizado', 'PanelController@setFinalizado');

Route::get('/reclamosRealizados','PanelController@getReclamosRealizados');
