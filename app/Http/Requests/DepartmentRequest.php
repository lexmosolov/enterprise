<?php namespace App\Http\Requests;

use App\Department;
use Psy\Util\String;
use Auth;


class DepartmentRequest extends Request
{

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return Auth::user()->hasRole('admin');
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		// Get current model id if exists
		// TODO: replace getting id from model to accurate method
		$department_id = isset($this->departments->id) ? $this->departments->id : '';

		return [
			'title' => ['required', 'min:4', "unique:departments,title,{$department_id}"],
		];
	}

}
