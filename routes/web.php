<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
|
*/



Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/login', 'PagesController@login');
Route::get('/claimed', 'PagesController@claimed');
Route::get('/rooms', 'RoomsController@index');
Route::get('/rooms/create', 'RoomsController@create');
Route::get('/rooms/{room}', 'RoomsController@show');
Route::post('/rooms', 'RoomsController@store');
Route::post('/rooms/notes', 'NotesController@store');
Route::put('/rooms/notes/{id}', 'NotesController@update');
Route::delete('rooms/notes/{id}', 'NotesController@destroy');
Route::post('rooms/{room}/fighters', 'FighterController@store');
Route::get('rooms/{room}/reload', 'FighterController@reload');
Route::delete('rooms/{room}/fighters/{fighter}', 'FighterController@delete');
Route::put('rooms/{room}/fighters/{fighter}', 'FighterController@update');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
