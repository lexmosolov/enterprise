<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

	protected $guarded = [];
	public $timestamps = false;


	public function head()
	{
		return $this->belongsTo('App\User');
	}

	public function users()
	{
		return $this->belongsToMany('App\User');
	}
}
