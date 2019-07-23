<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// passando resource para crud
Route::resource('/modelo', 'ModeloController');

// Rotas para import
Route::get('importExport', 'MaatwebsiteDemoController@importExport');
Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');

// Rotas Finanças residencial
Route::get('/financas', 'Financas\Residencial\FinancasController@index')->name('financas');
Route::get('/financas/residencial/agua', 'Financas\Residencial\FinancasController@agua')->name('financas.residencial.agua');
Route::get('/financas/residencial/luz', 'Financas\Residencial\FinancasController@luz')->name('financas.residencial.luz');
Route::get('/financas/residencial/residencialoutros', 'Financas\Residencial\FinancasController@residencialoutros')->name('financas.residencial.residencialoutros');

// Rotas Finanças veiculos
Route::get('/financas', 'Financas\FinancasController@index')->name('financas');
Route::get('/financas/veiculos/motogs500e', 'Financas\Veiculos\FinancasController@motogs500e')->name('financas.veiculos.motogs500e');
Route::get('/financas/veiculos/mototwister', 'Financas\Veiculos\FinancasController@mototwister')->name('financas.veiculos.mototwister');
Route::get('/financas/veiculos/carrovectra', 'Financas\Veiculos\FinancasController@carrovectra')->name('financas.veiculos.carrovectra');


// Rotas AdminSites
Route::get('/adminsites', 'AdminSites\AdminSitesController@index')->name('adminsites');