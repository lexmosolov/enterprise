<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	public $fillable = [
		'title',
		'body'
	];

	/**
	 * Get the creator user associated with the given entry.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
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
	 * Get the users associated with the given entry.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function users()
	{
		return $this->belongsToMany('App\User');
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
	 * Get a list of users ids associated with the given entry.
	 *
	 * @return array
	 */
	public function getUserListAttribute()
	{
		return $this->users()->lists('id');
	}

}
