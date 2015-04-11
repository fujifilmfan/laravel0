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
				case 'style_specific':
					$specificStyles = Bottle::specificBeerStyle()->get();
					for ($i = 1; $i < count($specificStyles); $i++) // why is the first element blank?
						{
							$returnOptions[] = $specificStyles[$i]['style_specific'];
						}
					break;

				case 'style_general':
					$generalStyles = Bottle::generalBeerStyle()->get();
					for ($i = 1; $i < count($generalStyles); $i++) // why is the first element blank?
						{
							$returnOptions[] = $generalStyles[$i]['style_general'];
						}
					break;

				case 'style_alternative':
					$alternativeStyles = Bottle::alternativeBeerStyle()->get();
					for ($i = 1; $i < count($alternativeStyles); $i++) // why is the first element blank?
						{
							$returnOptions[] = $alternativeStyles[$i]['style_alternative'];
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
				case 'style_specific':
					$bottles = Bottle::where('style_specific', '=', $selection)->get();
					$returnPhotos = $this->returnPhotoIDs($bottles);
					break;

				case 'style_general':
					$bottles = Bottle::where('style_general', '=', $selection)->get();
					$returnPhotos = $this->returnPhotoIDs($bottles);
					break;

				case 'style_alternative':
					$bottles = Bottle::where('style_alternative', '=', $selection)->get();
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
					$brewery = Brewery::orderby('short_name')->get();
					$bottles = $this->returnBottles($brewery);
					$returnPhotos = $this->returnPhotoIDs($bottles);
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
			$tempPhotos[] = Photo::getPhotos($bottle_ID)->get();
		}
		for ($i = 0; $i < count($tempPhotos); $i++)
		{
			for ($j = 0; $j < count($tempPhotos[$i]); $j++)
			{
				$photos[] = $tempPhotos[$i][$j]['photo_ID'];
			}
		}
		$returnPhotos = array_unique($photos);
		return $returnPhotos;
	}
	
}




