<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

	/**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * Get the parent Task associated with the given Task.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function parent()
	{
		return $this->belongsTo('App\Task', 'parent_id');
	}

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
	 * Transform wrong parent_id attribute when setting setting them to null&
	 *
	 * @param $value
	 */
	public function setParentIdAttribute($value)
	{
		$this->attributes['parent_id'] = $value ?: null;
	}

}
