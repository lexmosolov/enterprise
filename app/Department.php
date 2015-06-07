<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {

	/**
	 * Indicates that the model should not be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	public $fillable = [
		'title',
		'organization_id',
		'parent_id'
	];

	/**
	 * Get the organization associated by the given department.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function organization()
	{
		return $this->belongsTo('App\Organization');
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
	 * Get the all children associated with the given department.
	 *
	 * @return \Illuminate\Database\Eloquent\Builder|static
	 */
	public function childrenRecursive()
	{
		return $this->children()->with('childrenRecursive');
	}

	/**
	 * Get the immediate children associated with the given department.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function children()
	{
		return $this->hasMany('App\Department', 'parent_id');
	}

	/**
	 * Get the parent department associated with the given department.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function parent()
	{
		return $this->belongsTo('App\Department', 'parent_id');
	}

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
		return $this->belongsToMany('App\User');
	}

	/**
	 * Transform wrong parent_id attribute to setting them to null.
	 *
	 * @param $value
	 */
	public function setParentIdAttribute($value)
	{
		$this->attributes['parent_id'] = $value ?: null;
	}

}
