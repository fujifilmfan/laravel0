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

// get request: loading a page; change the / to change the URL that loads 'hello'; @home is the method to call in the controller

Route::get('/', 'PagesController@index');

Route::get('/bottles', 'PagesController@bottles');

Route::get('/projects', 'PagesController@projects');

Route::get('/Flipboard', 'PagesController@flipboard');

Route::get('/news_reader', 'PagesController@newsReader');

Route::get('/Airbnb', 'PagesController@airbnb');

Route::get('/BBC', 'PagesController@BBC');

// Route::get('/beer', function()
// {
// 	$pageID = 'beer';
// 	$bottles = Bottle::all();

// 	return View::make('pages.beer', compact('pageID', 'bottles'));
// });

// Route::get('/{beername}', function($beername)
// {
// 	$pageID = $beername;
// 	$bottle = Bottle::where('beer_name', $beername)->first();

// 	return View::make('pages.show', compact('pageID', 'bottle'));
// 	// return View::make('pages.show', ['bottle' => $bottle]);
// });

// Route::get('/test', 'PagesController@test');

// Route::get('/{beername}', 'PagesController@bottlename');



Route::get('test-home', function()
{
    return View::make('pages.test-home');
});
Route::get('test-about', function()
{
    return View::make('pages.test-about');
});
Route::get('test-projects', function()
{
    return View::make('pages.test-projects');
});
Route::get('test-contact', function()
{
    return View::make('pages.test-contact');
});
