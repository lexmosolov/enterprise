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

	/**
	 * Get the all children associated with the given Task.
	 *
	 * @return \Illuminate\Database\Eloquent\Builder|static
	 */
	public function childrenRecursive()
	{
		return $this->children()->with('childrenRecursive');
	}

	/**
	 * Get the immediate children associated with the given Task.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function children()
	{
		return $this->hasMany('App\Department', 'parent_id');
	}

	/**
	 * Get the parent Task associated with the given Task.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function parent()
	{
		return $this->belongsTo('App\Department', 'parent_id');
	}

}
