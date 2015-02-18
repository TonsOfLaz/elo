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

Route::get('instagram', 'PagesController@instagramTest');

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('albums/{id}/rankings', 'AlbumsController@getRankings');
Route::get('albums/{id}/play', 'AlbumsController@getPlay');
Route::get('albums/{id}/break', 'AlbumsController@playBreak');

Route::get('photos/{id}/wins', 'PhotosController@wins');
Route::get('photos/{id}/losses', 'PhotosController@losses');
Route::get('photos/{id}/ties', 'PhotosController@ties');

Route::resource('users', 'UsersController');
Route::resource('albums', 'AlbumsController');
Route::resource('photos', 'PhotosController');
Route::resource('matches', 'MatchesController');
Route::resource('labels', 'LabelsController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
