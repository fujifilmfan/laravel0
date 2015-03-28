<?php

class PagesController extends BaseController {

	public function index()
	{
		$pageID = 'index';
		return View::make('pages.index')->with('pageID', $pageID);
	}

	public function bottles()
	{
		$pageID = 'bottles';
		// scopes defined in the relevant models:
		$types = Bottle::beerType()->get();
		$breweries = Brewery::brewery()->get();
		$states = Brewery::region('=')->get();
		$provinces = Brewery::region('!=')->get();
		$countries = Brewery::country()->get();


		$photos = Photo::where('angle', 'front')->get();

		return View::make('pages/bottles')
			->with('pageID', $pageID)
			->with('types', $types)
			->with('breweries', $breweries)
			->with('states', $states)
			->with('provinces', $provinces)
			->with('countries', $countries)
			// ['bottles' => $bottles] // within make above
			// -or-
			// ->withBottles($bottles);
			// -or-
			// ->with('bottles', $bottles);
			->with('photos', $photos);
		// -or-
		// return View::make('pages/bottles', array(
			// 'pageID' => $pageID,
			// 'bottles' => $bottles
		// ));
	}

	public function beers()
	{
		$pageID = 'beers';
		$bottles = Bottle::orderby('beer_name')->get();

		$bottlesTest = Bottle::find(481);
		$my_breweries = $bottlesTest->breweries()->get();

		$breweriesTest = Brewery::find(63);
		$my_bottles = $breweriesTest->bottles()->get();

		return View::make('pages.beers', compact('pageID', 'bottles', 'my_breweries', 'bottlesTest', 'my_bottles', 'breweriesTest'));
	}

	public function dropdown()
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
		return View::make('pages.thirdMethod')->with('pageID', $pageID);
	}

}