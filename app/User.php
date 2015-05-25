<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

	use Authenticatable, CanResetPassword;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'department_id', 'role_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function department()
	{
		return $this->belongsTo('App\Department');
	}

	/**
	 * Get the role associated with the given user.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function role()
	{
		return $this->belongsTo('App\Role');
	}

	/**
	 * Get the entries created by the given user.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function entries()
	{
		return $this->hasMany('App\Entry');
	}

	/**
	 * Get the entries associated with the given user.
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function entriesFor()
	{
		return $this->belongsToMany('App\Entry');
	}


	/**
	 * Get the entries created by the given user, associated with user and user department.
	 *
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function entriesForShow()
	{
		// TODO: rework dat bullshit ma`fucker!
		$entries = $this->entries;                                    // Entries created 	  by user
		$entries = $entries->merge($this->entriesFor);                // Entries associated with user
		return $entries->merge($this->department->entries);        // Entries associated with user department
	}
}
