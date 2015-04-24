<?php namespace App\Http\Requests;

use App\Department;
use Psy\Util\String;

class DepartmentRequest extends Request
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
		// Get current model id if exists
		$department_id = isset($this->departments->id) ? $this->departments->id : '';

		return [
			'name' => ['required', 'min:3', "unique:departments,name,{$department_id}"],
			'head_id' => ['required'],
		];
	}


}
