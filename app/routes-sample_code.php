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

// 6: Blade Basics
// get all users from our database
Route::get('users', function()
{
	// this is Eloquent - makes for cleaner code than mixing SQL queries into PHP 
	$users = User::all();  // same as: select * from users

	$user = User::find(1); // find user with id of 1; when data is returned, it will be treated as a class; therefore:

	return $user->username;
	// or
	return $user->email;
});

// 4: Database Access; 5: Eloquent Basics
Route::get('/', function()
{
	// // returns everything from bottle table
	$bottles = DB::table('brewery')->get();
	return $bottles;

	// returns bottle with ID of 10 from bottle table (THIS DOESN'T WORK B/C PRIMARY KEY COLUMN HARDCODED AS ID)
	$bottle = DB::table('bottle')->find(10);
	return $bottle;

	$bottle = DB::table('bottle')->where('bottle_ID', '=', 10)->get();
	return $bottle;

	$bottles = DB::table('bottle')->where('beer_type', '=', 'Ale')->get();
	return $bottles;

	// returns bottle with ID of 10 from bottle table (HAD TO ADD BOTTLE.PHP TO MODELS)
	$bottle = Bottle::find(10);
	// returns object dd: die and dump, sugar for die(var_dump($bottle));
	dd($bottle);
	// returns array
	return $bottle;

	// could write a select statement this way: (but cleaner to use the ORM)
	DB::select('select * from bottle');

	$bottle = DB::table('bottle')->where('bottle_ID', 115)->first();
	dd($bottle); // return $bottle; DOESN'T WORK
	// the above works, but since I already have the bottle table defined in my models dir, I can do this:
	$bottle = Bottle::find(115);
	$bottle = Bottle::where('bottle_ID', 115)->get();
	$bottle = Bottle::all(); // select * from bottle
	return $bottle;

	// what if I want to add a user?
	$user = new User;
	$user->username = 'NewUser';
	// don't store passwords in cleartext!
	// $user->password = 'password';
	// do this instead:
	$user->password = Hash::make('password');
	$user->save();
	// however, this won't work unless we tell Laravel something about timestamps; see User.php for how to override this

	// another way to do the same thing, but gives a mass assignment error
	User::create([
		'username' => 'AnotherUser',
		'password' => Hash::make('1234')
	]);

	// update user
	$user = User::find(2);
	$user->username = 'UpdatedName';
	$user->save();

	// delete user
	$user = User::find(2);
	$user->delete();

	return User::orderBy('username', 'asc')->get();
	return User::orderBy('username', 'asc'))->take(2)->get();

});



// get request: loading a page; change the / to change the URL that loads 'hello'; @home is the method to call in the controller

Route::get('/', 'PagesController@home');

Route::get('/index', 'PagesController@index');

Route::get('/about', 'PagesController@about');

// moved to PagesController.php
Route::get('/', function()
{
	// View: class or facade

 return 'foo';

// 'hello' here refers to app/views/hello.php
	return View::make('hello');
});

// or will load the 'hello' page when I enter localhost:8000/foo/bar
Route::get('/foo/bar', function()
	{
		return View::make('hello');
	});

