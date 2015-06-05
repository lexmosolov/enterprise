<?php namespace App\Http\Requests\Task;

use App\Http\Requests\Request;

class TaskRequest extends Request
{

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => ['required', 'min:3'],
			'description' => ['required'],
			'deadline' => ['required'],
			'performer_id' => ['required', 'numeric']
		];
	}

}
