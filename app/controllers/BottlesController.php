<?php

class BottlesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pageID = 'bottles';
		// scopes defined in the relevant models:
		// $types = Bottle::beerType()->get();
		// $breweries = Brewery::brewery()->get();
		// $states = Brewery::region('=')->get();
		// $provinces = Brewery::region('!=')->get();
		// $countries = Brewery::country()->get();


		$photos = Photo::where('priority', '=', 'first')->get();

		return View::make('pages/bottles')
			->with('pageID', $pageID)
			// ->with('types', $types)
			// ->with('breweries', $breweries)
			// ->with('states', $states)
			// ->with('provinces', $provinces)
			// ->with('countries', $countries)
			->with('photos', $photos);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$pageID = 'create';
		return View::make('pages.create')->with('pageID', $pageID);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return 'add the new bottle given the post data';
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
