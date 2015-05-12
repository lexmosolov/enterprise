<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

	public $timestamps = false;
	protected $fillable = ['title'];

	public function getUserListAttribute()
	{
		return $this->users()->lists('id');
	}

	public function users()
	{
		return $this->hasMany('App\User');
	}
}
