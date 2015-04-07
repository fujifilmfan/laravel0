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

Route::get('beers', 'PagesController@beers');

// why can I use 'beername' here and not 'beer_name'?
Route::get('beers/{beername}', 'PagesController@beerDetail');

Route::get('firstMethod', 'PagesController@firstMethod');

Route::get('loadNames/{beername}', 'PagesController@loadNames');

Route::get('thirdMethod', 'PagesController@thirdMethod');

Route::get('api/dropdown', 'PagesController@dropdown');

Route::get('contactForm', 'PagesController@contactForm');

Route::get('returnPhotos', 'PagesController@returnPhotos');

Route::get('filterDropdowns', 'PagesController@filterDropdowns');

Route::get('filterOne', 'PagesController@filterOne');
Route::get('optionOne', 'PagesController@optionOne');

Route::resource('projects', 'ProjectsController');

Route::resource('bottles', 'BottlesController');

Route::get('about', function()
{
	return View::make('about');
});


// Route::get('beers', function(){
// 	$pageID = 'beers';
// 	$bottles = Bottle::orderby('beer_name')->get();

// 	// if ('option' == "") {
// 	// 	$input = "Stone Brewing Co.";
// 	// }

// 	$input = Input::get('option');

// 	$brewery = Brewery::find($input);
// 	$list = Bottle::where('short_name', '=', $brewery);

// 	return View::make('pages.beers', compact('pageID', 'bottles'));
// 	return Response::make($list->get(['beer_name', 'beer_type']));
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
