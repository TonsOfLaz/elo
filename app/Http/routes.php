<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('rankings', 'PagesController@getRankings');
Route::get('play', 'MatchesController@getPlay');
Route::get('matches/break', 'MatchesController@playBreak');

Route::resource('users', 'UsersController');
Route::resource('albums', 'AlbumsController');
Route::resource('photos', 'PhotosController');
Route::resource('matches', 'MatchesController');
Route::resource('labels', 'LabelsController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
