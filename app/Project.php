<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Project
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $slug
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Task[] $tasks
 * @property-read \App\Project $project
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Project whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Project whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Project whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Project whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Project whereUpdatedAt($value)
 */
class Project extends Model
{

	protected $guarded = [];

	public function tasks()
	{
		return $this->hasMany('App\Task');
	}

	public function project()
	{
		return $this->belongsTo('App\Project');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
