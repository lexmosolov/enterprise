<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

	protected $fillable = ['name', 'head_id'];
	public $timestamps = false;


	public function head()
	{
		return $this->belongsTo('App\User');
	}

	public function users()
	{
		return $this->belongsToMany('App\User');
	}

	public function getUserListAttribute()
	{
		return $this->users()->lists('id');
	}
}
