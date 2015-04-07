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

	public function filterOne()
	{
		$category = Input::get('category');

		switch ($category)
			{
				case 'beertype':
					$beertypes = Bottle::beerType()->get();
					for ($i = 1; $i < count($beertypes); $i++) // why is the first element blank?
						{
							$returnOptions[] = $beertypes[$i]['beer_type'];

						}
					break;
				case 'brewery':
					$breweries = Brewery::brewery()->get();
					for ($i = 1; $i < count($breweries); $i++) // why is the first element blank?
						{
							$returnOptions[] = $breweries[$i]['short_name'];

						}
					break;
				case 'state':
					$states = Brewery::region('=')->get();
					for ($i = 1; $i < count($states); $i++) // why is the first element blank?
						{
							$returnOptions[] = $states[$i]['region'];

						}
					break;
				case 'province':
					$provinces = Brewery::region('!=')->get();
					for ($i = 1; $i < count($provinces); $i++) // why is the first element blank?
						{
							$returnOptions[] = $provinces[$i]['region'];

						}
					break;
				case 'country':
					$countries = Brewery::country()->get();
					for ($i = 1; $i < count($countries); $i++) // why is the first element blank?
						{
							$returnOptions[] = $countries[$i]['country'];

						}
					break;
				default:
			}
		return Response::make($returnOptions);
	}

	public function optionOne()
	{
		$category = Input::get('category');
		$selection = Input::get('selection');

		switch ($category)
			{
				case 'beertype':
					$bottles = Bottle::where('beer_type', '=', $selection)->get();
					foreach ($bottles as $bottle)
					{
						$bottle_IDs[] = $bottle->bottle_ID;
					}
					foreach ($bottle_IDs as $bottle_ID)
					{
						$photos[] = Photo::getPhotos($bottle_ID)->get();
					}

					for ($i = 0; $i < count($photos); $i++)
					{
						for ($j = 0; $j < count($photos[$i]); $j++)
						{
							$returnPhotos[] = $photos[$i][$j]['photo_ID'];
						}
					}
					break;
				case 'brewery':
					$breweries = Brewery::brewery()->get();
					for ($i = 1; $i < count($breweries); $i++) // why is the first element blank?
						{
							$response[] = $breweries[$i]['short_name'];

						}
					break;
				case 'state':
					$states = Brewery::region('=')->get();
					for ($i = 1; $i < count($states); $i++) // why is the first element blank?
						{
							$response[] = $states[$i]['region'];

						}
					break;
				case 'province':
					$provinces = Brewery::region('!=')->get();
					for ($i = 1; $i < count($provinces); $i++) // why is the first element blank?
						{
							$response[] = $provinces[$i]['region'];

						}
					break;
				case 'country':
					$countries = Brewery::country()->get();
					for ($i = 1; $i < count($countries); $i++) // why is the first element blank?
						{
							$response[] = $countries[$i]['country'];

						}
					break;
				default:
			}
		return Response::make($returnPhotos);
	}

	public function returnPhotos()
	{
		Log::info(Input::all());

		// $selectedBeertype = Input::get('beertype');
		$selectedBrewery = Input::get('brewery');
		$selectedState = Input::get('state');
		// $selectedProvince = Input::get('province');
		// $selectedCountry = Input::get('country');
		$selectedCategory = Input::get('category');

		switch ($selectedCategory)
			{
				// case 'beertype':
				// 	break;
				case 'brewery':
					$states = Brewery::filteredStates($selectedBrewery)->get();
					$breweries = Brewery::brewery()->get();
					break;
				case 'state':
					$breweries = Brewery::filteredBreweries($selectedState)->get();
					$states = Brewery::region('=')->get();
					break;
				// case 'province':
				// 	break;
				// case 'country':
				// 	break;
				// default:
			}

		// $brewery = Brewery::where('short_name', $selectedBrewery)->get();

		// for ($i = 0; $i < count($brewery); $i++)
		// 	{
		// 		$bottle[] = $brewery[$i]->bottles()->get();
		// 	}

		// for ($i = 0; $i < count($bottle); $i++)
		// 	{
		// 		for ($j = 0; $j < count($bottle[$i]); $j++)
		// 			{
		// 				$test2[] = $bottle[$i][$j]; // ['beer_name'];
		// 			}
		// 	}

		return Response::make($breweries);

		// $data = Input::all();  // could also use Input::only('brewery') or Input::get('brewery')
		//$brewery = $data['brewery'];
		// $count = count($data); <- works

		// $brewery = Brewery::where('short_name', $data['brewery'])->first();

		// foreach ($brewery as $brewery)
		// 	{
		// 		$bottle = $brewery->bottles()->get();
		// 	}
		//$bottle = $brewery->bottles()->get();

		// return Response::json(array('name' => 'Steve', 'state' => 'CA'));
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