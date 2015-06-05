<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

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
	 * Get a list of department ids associated with the given entry.
	 *
	 * @return array
	 */
	public function getDepartmentListAttribute()
	{
		return $this->departments()->lists('id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function departments()
	{
		return $this->belongsToMany('App\Department');
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
	 * Get the tasks associated with the given user.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function allTasks()
	{
		return $this->hasMany('App\Task', 'performer_id')->orWhere('guarantor_id', $this->id);
	}

	/**
	 * Get the tasks created by the given user.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function tasks()
	{
		return $this->hasMany('App\Task', 'guarantor_id');
	}

	/**
	 * Get the entries associated with the given user.
	 *
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
		if ($this->hasRole('admin'))
		{
			return Entry::all();
		}

//		dd($this->entriesFor);

		// TODO: rework dat bullshit ma`fucker! No ORM magic CUNT!
		$entries = $this->entries
			->merge($this->entriesFor);// Entries associated with user

		// Entries associated with user departments
		foreach ($this->departments() as $department)
		{
			$entries->merge($department->entries);
		}

		return $entries;
	}

	/**
	 * Checks if the user has a role by its name.
	 *
	 * @param $role string
	 * @return bool
	 */
	public function hasRole($role)
	{
		return $this->role->title == $role;
	}

}
