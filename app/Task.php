<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

	protected $guarded = [];

	public function guarantor()
	{
		return $this->belongsTo('App\User');
	}

	public function performer()
	{
		return $this->belongsTo('App\User');
	}

}
