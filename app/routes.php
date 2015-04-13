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

// ---------- production routes ---------- //

Route::get('/', 'PagesController@index');

Route::resource('projects', 'ProjectsController');

Route::resource('bottles', 'BottlesController');

Route::get('filterOne', 'PagesController@filterOne');
Route::get('optionOne', 'PagesController@optionOne');
Route::get('weatherScraper', 'PagesController@weatherScraper');

// ---------- non-production routes ---------- //

Route::get('about', 'TestsController@about');

Route::get('beers', 'TestsController@beers');

// why can I use 'beername' here and not 'beer_name'?
Route::get('beers/{beername}', 'TestsController@beerDetail');

Route::get('firstMethod', 'TestsController@firstMethod');

Route::get('loadNames/{beername}', 'TestsController@loadNames');

Route::get('thirdMethod', 'TestsController@thirdMethod');

Route::get('api/dropdown', 'TestsController@dropdown');

Route::get('contactForm', 'TestsController@contactForm');

Route::get('returnPhotos', 'TestsController@returnPhotos');

Route::get('filterDropdowns', 'TestsController@filterDropdowns');
