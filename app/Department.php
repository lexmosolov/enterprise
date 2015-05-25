<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

	public $timestamps = false;

	protected $fillable = ['title'];

	/**
	 * Get a list of users ids associated with the given department.
	 *
	 * @return array
	 */
	public function getUserListAttribute()
	{
		return $this->users()->lists('id');
	}

	/**
	 * Get the users associated by the given department.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function users()
	{
		return $this->hasMany('App\User');
	}

	/**
	 * Get the entries associated by the given department.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function entries()
	{
		return $this->belongsToMany('App\Entry');
	}

}
