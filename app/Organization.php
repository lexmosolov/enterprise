<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model {

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
		'title'
	];

	/**
	 * Get the departments associated with the given organization.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function departments()
	{
		return $this->hasMany('App\Department');
	}

}
