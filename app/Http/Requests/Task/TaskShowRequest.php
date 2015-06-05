<?php namespace App\Http\Requests\Task;

use Auth;

// TODO: task show to route model binding change
class TaskShowRequest extends TaskRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		// check is author of tasks or
		return $this->route('tasks')->guarantor_id == Auth::user()->id ||
		$this->route('tasks')->performer_id == Auth::user()->id;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [];
	}

}
