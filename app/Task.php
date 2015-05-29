<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

	protected $guarded = [];

	/**
	 * Get the guarantor associated with the given Task.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function guarantor()
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * Get the performer associated with the given Task.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function performer()
	{
		return $this->belongsTo('App\User');
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
		return $this->hasMany('App\Task', 'parent_id');
	}

	/**
	 * Get the parent Task associated with the given Task.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function parent()
	{
		return $this->belongsTo('App\Task', 'parent_id');
	}

}
