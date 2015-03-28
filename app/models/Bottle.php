<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Bottle extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	// would be 'bottles' by default
	protected $table = 'bottle';
	// would be 'id' by default
	protected $primaryKey = 'bottle_ID';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function breweries()
	{
		// if I used conventional names, I would not need to override the pivot table name and keys here
		return $this->belongsToMany('Brewery', 'bottlebrewery', 'bottle_ID', 'brewery_ID');
	}

	public function scopeBeerType($query)
	{
		return $query->select('beer_type')->distinct()->orderby('beer_type');
	}
}