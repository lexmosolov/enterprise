<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Task
 *
 * @property integer $id
 * @property integer $project_id
 * @property string $name
 * @property string $slug
 * @property boolean $completed
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Task whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Task whereProjectId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Task whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Task whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Task whereCompleted($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Task whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Task whereUpdatedAt($value)
 */
class Task extends Model
{

	protected $guarded = [];

}
