<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', 'uses' => 'NoteController@index'));
Route::get('/create', array('as' => 'create', 'uses' => 'NoteController@create'));

Route::get('/category/{id}', array('as' => 'category.notes', 'uses' => 'NoteController@index'));
Route::get('/note/{id}/delete', array('as' => 'note.delete', 'uses' => 'NoteController@confirmDestroy'));


Route::resource('note', 'NoteController');
Route::resource('category', 'CategoryController');



