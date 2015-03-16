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
		return View::make('pages.bottles')->with('pageID', $pageID);
	}

	public function projects()
	{
		$pageID = 'projects';
		return View::make('pages.projects')->with('pageID', $pageID);
	}

	public function flipboard()
	{
		$pageID = 'Flipboard';
	 	return View::make('pages.Flipboard')->with('pageID', $pageID);
	}

	public function newsReader()
	{
	 	$pageID = 'news_reader';
	 	return View::make('pages.news_reader')->with('pageID', $pageID);
	}

	public function airbnb()
	{
		$pageID = 'Airbnb';
		return View::make('pages.Airbnb')->with('pageID', $pageID);
	}

	public function BBC()
	{
		$pageID = 'BBC';
		return View::make('pages.BBC')->with('pageID', $pageID);
	}

	// public function beer()
	// {

	// 	$pageID = 'beer';
	// 	$bottles = Bottle::all();

	// 	return View::make('pages.beer', compact('pageID', 'bottles'));

	// 	// could also write (and string with statements):
	// 	// return View::make('pages.test')->withBottles($bottles);
	// 	// return View::make('pages.test', ['bottles' => $bottles]);
	// }

	// public function bottlename()
	// {
	// 	$pageID = 'show';
	// 	// $bottle = Bottle::whereBottlename($beer_name)->first();
	// 	$bottle = DB::table('bottle')->where('beer_name', $beer_name)->first();

	// 	return View::make('pages.show', ['bottle' => $bottle]);
	// }


}