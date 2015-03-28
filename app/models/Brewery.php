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
		// the order of the keys matters
		return $this->belongsToMany('Bottle', 'bottlebrewery', 'brewery_ID', 'bottle_ID');
	}

	public function scopeBrewery($query)
	{
		return $query->select('short_name')->distinct()->orderby('short_name');
	}

	public function scopeRegion($query, $truth)
	{
		return $query->select('region')->where('country', $truth, 'USA')->distinct()->orderby('region');
	}

	public function scopeCountry($query)
	{
		return $query->select('country')->distinct()->orderby('country');
	}
}