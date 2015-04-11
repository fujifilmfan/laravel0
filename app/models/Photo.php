<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Photo extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'photo';
	protected $primaryKey = 'photo_ID';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function bottles()
	{
		// bottle_ID is the foreign key in the photo table
		return $this->belongsTo('Bottle', 'bottle_ID');
	}

	public function scopeGetPhotos($query, $bottle_ID)
	{
		return $query->select('photo_ID')->where('bottle_ID', '=', $bottle_ID)->where('priority', '=', 'first');
	}
}