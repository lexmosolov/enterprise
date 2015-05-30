<?php namespace App\Http\Requests;

use App\Http\Requests\TaskRequest;

class UpdateTaskRequest extends TaskRequest
{

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		// check complete status of children task for change complete status request task
		if ($this->completed != $this->route('tasks')->completed) {
			foreach ($this->route('tasks')->children as $children) {
				if (!$children->completed) {
					$this->message = "You can not complete the task because you did not complete children tasks.";
					return false;
				}
			}
		}

		$currentId = $this->route('tasks')->id;
		$parentId = $this->parent_id;

		return $currentId != $parentId;
	}

}
