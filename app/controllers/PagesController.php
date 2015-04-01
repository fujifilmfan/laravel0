<?php

class PagesController extends BaseController {

	public function index()
	{
		$pageID = 'index';
		return View::make('pages.index')->with('pageID', $pageID);
	}

	public function contactForm()
	{
		$pageID = 'contactForm';
		return View::make('pages.contactForm')->with('pageID', $pageID);
	}

	public function returnPhotos()
	{
		Log::info(Input::all());

		// $myData = file_get_contents('php://input');
		// $decoded = json_decode($myData);

		$data = Input::all();
		//$data = Input::only('brewery');
		
		//$brewery = $data['brewery'];
		// $count = count($data); <- works

		// $input = Input::get('brewery');

		$brewery = Brewery::where('short_name', $data['brewery'])->first();

		$bottle = $brewery->bottles()->get();

		// for ($i = 0; $i < count($bottle); $i++)
		//     {
		//         $test2[] = $bottle[$i]['beer_name'];

		//     }
		
		return Response::make($bottle);
		// return Response::make('qualified success');
	}


	public function beers()
	{
		$pageID = 'beers';
		$bottles = Bottle::orderby('beer_name')->get();

		// returns a Stone beer associated with 3 breweries
		$bottlesTest = Bottle::find(481);
		$my_breweries = $bottlesTest->breweries()->get();

		// works the same as above
		$test8s = Bottle::find(481);
		$test8s = $test8s->breweries()->get();
		// writing this doesn't work:
		// $test8s->breweries()->get();

		$test3s = Bottle::find(481)->breweries;
		// same as:
		// $test3s = Bottle::find(481)->breweries()->get();

		// returns bottles from one Stone
		$breweriesTest = Brewery::find(63);
		$my_bottles = $breweriesTest->bottles()->get();

		// returns all bottles that have an associated brewery WHERE...
		$test4s = Bottle::whereHas('breweries', function($q)
			{
				$q->where('alcohol', '>=', 10);
			})->get();

		// returns all bottles that have an associated brewery
		$test5s = Bottle::has('breweries')->get();

		// returns all bottles that have an associated photo
		$test6s = Bottle::has('photos')->get();

		// $test7s = Bottle::has('beerType')->get();

		return View::make('pages.beers', 
			compact('pageID', 'bottles', 'bottlesTest', 'my_breweries', 'breweriesTest', 'my_bottles', 
				'test3s', 'test4s', 'test5s', 'test6s', 'test7s', 'test8s'));
	}

	public function dropdown() // called by thirdMethod dropdown
	{
		$input = Input::get('option');
		//$brewery = Brewery::find(63);
		$brewery = Brewery::where('short_name', $input)->first();

		// for ($i = 0;  $i < count($brewery); $i++)
		// 	{
		// 		$test1[] = $brewery[$i]['brewery_ID'];
		// 	}
		//return $test1;
		//$bottle = Bottle::where('brewery_ID', $test1)->get();
		$bottle = $brewery->bottles()->get();

		for ($i = 0; $i < count($bottle); $i++)
		    {
		        $test2[] = $bottle[$i]['beer_name'];

		    }
		// return $test2;


		//$test = $bottle[0]['beer_name'];
		//$test = $bottle->get(10, 'beer_name');
		//$bottle = $brewery->bottles();
		// return View::make('pages.testpage', compact('input', 'brewery', 'bottle'));
		//return Response::make($bottle->get(['beer_name']));
		return Response::make($test2);
	}

	public function beerDetail($beername)
	{
		$pageID = $beername;
		$bottle = Bottle::wherebeer_name($beername)->first();
		return View::make('pages.beerDetail', ['bottle' => $bottle], ['pageID' => $pageID]);
	}

	public function firstMethod() 
	{
		$pageID = 'firstMethod';
		$types = Bottle::beerType()->get();
		return View::make('pages.firstMethod', ['types' => $types], ['pageID' => $pageID]);
	}

	public function loadNames($beername)
	{
		$names = Bottle::where('beer_type', $beername)->get();
		return View::make('pages.thisview', ['names' => $names]);
	}

	public function thirdMethod() 
	{
		$pageID = 'thirdMethod';

		$types = Bottle::beerType()->get();
		$breweries = Brewery::brewery()->get();
		$states = Brewery::region('=')->get();
		$provinces = Brewery::region('!=')->get();
		$countries = Brewery::country()->get();


		$photos = Photo::where('angle', 'front')->get();

		return View::make('pages.thirdMethod')
			->with('pageID', $pageID)
			->with('types', $types)
			->with('breweries', $breweries)
			->with('states', $states)
			->with('provinces', $provinces)
			->with('countries', $countries)
			->with('photos', $photos);
	}

}