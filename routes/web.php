<?php
use App\Events\combatUpdated;
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

Route::get('/rooms/{room}/update', function(){
	combatUpdated::dispatch();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
