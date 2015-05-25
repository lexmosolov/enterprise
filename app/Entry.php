<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{

	public $fillable = [
		'title',
		'body',
	];


	/**
	 * Get the user associated with the given entry.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * Get a list of department ids associated with the given entry.
	 *
	 * @return array
	 */
	public function getDepartmentListAttribute()
	{
		return $this->departments()->lists('id');
	}

	/**
	 * Get the departments associated with the given entry.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function departments()
	{
		return $this->belongsToMany('App\Department');
	}

	/**
	 * Get a list of users ids associated with the given entry.
	 *
	 * @return array
	 */
	public function getUserListAttribute()
	{
		return $this->users()->lists('id');
	}

	/**
	 * Get the users associated with the given entry.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function users()
	{
		return $this->belongsToMany('App\User');
	}
}
