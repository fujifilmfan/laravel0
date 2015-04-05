<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Brewery extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	// would be 'bottles' by default
	protected $table = 'brewery';
	// would be 'id' by default
	protected $primaryKey = 'brewery_ID';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function bottles()
	{
		// if I used conventional names, I would not need to override the pivot table name and keys here
		// the order of the keys matters - why?
		return $this->belongsToMany('Bottle', 'bottlebrewery', 'brewery_ID', 'bottle_ID');
	}

	public function scopeBrewery($query)
	{
		return $query->select('short_name')->distinct()->orderby('short_name');
	}

	public function scopeRegion($query, $bool)
	{
		return $query->select('region')->where('country', $bool, 'USA')->distinct()->orderby('region');
	}

	public function scopeCountry($query)
	{
		return $query->select('country')->distinct()->orderby('country');
	}

	public function scopeFilteredStates($query, $brewery)
	{
		return $query->select('region')->where('country', '=', 'USA')->where('short_name', '=', $brewery)->distinct()->orderby('region');
	}

	public function scopeFilteredBreweries($query, $state)
	{
		return $query->select('short_name')->where('region', '=', $state)->distinct()->orderby('short_name');
	}
}