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
use MisReclamos\Http\Middleware\CheckLogin;

/*
Administrador de Tipo de Reclamos
|--------------------------------------------------------------------------
*/
Route::resource('reclamo','ReclamoController')->middleware(CheckLogin::class);
/*
|--------------------------------------------------------------------------
*/


/*
Panel de Control de Reclamos Realizados
|--------------------------------------------------------------------------
*/
Route::get('/tablaPanel', 'PanelController@index')->name('panelReclamo')->middleware(CheckLogin::class);

Route::get('/tablaDeReclamos', 'PanelController@tabla')->name('tablaDeReclamos')->middleware(CheckLogin::class);

Route::get('/tablaDeReclamos/{id}/setPendiente', 'PanelController@setPendiente')->middleware(CheckLogin::class);

Route::get('/tablaDeReclamos/{id}/setProceso', 'PanelController@setProceso')->middleware(CheckLogin::class);

Route::get('/tablaDeReclamos/{id}/setFinalizado', 'PanelController@setFinalizado')->middleware(CheckLogin::class);

Route::get('/reclamosRealizados','PanelController@getReclamosRealizados')->middleware(CheckLogin::class);

Route::get('/mapaCalor','PanelController@getMapaCalor')->middleware(CheckLogin::class);
/*
|--------------------------------------------------------------------------
*/


/*
Login de Admin
|--------------------------------------------------------------------------
*/
Route::get('/','LoginController@index')->name('login');

Route::get('/logout','LoginController@logout')->name('logout');

Route::post('/login','LoginController@login');
/*
|--------------------------------------------------------------------------
*/
