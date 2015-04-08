<?php

class PagesController extends BaseController {

	public function index()
	{
		$pageID = 'index';
		return View::make('pages.index')->with('pageID', $pageID);
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
					$returnPhotos = $this->returnPhotoIDs($bottles);
					break;

				case 'brewery':
					$brewery = Brewery::where('short_name', '=', $selection)->get();
					$bottles = $this->returnBottles($brewery);
					$returnPhotos = $this->returnPhotoIDs($bottles);
					break;

				case 'state':
					$state = Brewery::where('region', '=', $selection)->get();
					$bottles = $this->returnBottles($state);
					$returnPhotos = $this->returnPhotoIDs($bottles);
					break;

				case 'province':
					$province = Brewery::where('region', '=', $selection)->get();
					$bottles = $this->returnBottles($province);
					$returnPhotos = $this->returnPhotoIDs($bottles);
					break;

				case 'country':
					$country = Brewery::where('country', '=', $selection)->get();
					$bottles = $this->returnBottles($country);
					$returnPhotos = $this->returnPhotoIDs($bottles);
					break;

				default:
			}
		return Response::make($returnPhotos);
	}

	private function returnBottles($query)
	{
		for ($i = 0; $i < count($query); $i++)
		{
			$tempBottles[] = $query[$i]->bottles()->get();
		}
		for ($i = 0; $i < count($tempBottles); $i++)
		{
			for ($j = 0; $j < count($tempBottles[$i]); $j++)
			{
				$bottles[] = $tempBottles[$i][$j];
			}
		}
		return $bottles;
	}	

	private function returnPhotoIDs($bottles)
	{
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
		return $returnPhotos;
	}
	
}




