<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'AgendaController@index')->name('agenda.index');
Route::get('/create_agenda', 'AgendaController@create')->name('agenda.create');
Route::post('/store_agenda', 'AgendaController@store')->name('agenda.store');
Route::get('/detail_agenda/{agenda:slug}', 'AgendaController@show')->name('agenda.detail');
Route::get('/edit_agenda/{agenda:slug}', 'AgendaController@edit')->name('agenda.edit');
Route::put('/update_agenda/{agenda:slug}', 'AgendaController@update')->name('agenda.update');
Route::delete('/delete_agenda/{id}', 'AgendaController@destroy')->name('agenda.destroy');
