<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class UpdateUserRequest extends UserRequest
{

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		if (Auth::user()->hasRole('admin')) {
			return true;
		}
		// If auth user is head of request user department
		if (Auth::user()->hasRole('head') && Auth::user()->department_id == $this->department_id) {
			return true;
		}
		$this->message = 'Sorry but you not a head of current user department.';
		return false;
	}

}
