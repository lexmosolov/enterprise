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

	public function childrenRecursive()
	{
		return $this->children()->with('childrenRecursive');
	}

	public function children()
	{
		return $this->hasMany('App\Task', 'parent_id');
	}

	public function parentRecursive()
	{
		return $this->parent()->with('parentRecursive');
	}

	public function parent()
	{
		return $this->belongsTo('App\Task', 'parent_id');
	}

}
