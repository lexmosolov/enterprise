<?php namespace App\Http\Requests\User;

use App\Http\Requests\Request;
use Auth;

class UserRequest extends Request
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
		$user_id = isset($this->users->id) ? $this->users->id : '';

		return [
			'name' => ['required', 'min:3'],
			'email' => ['required', 'email', "unique:users,email,{$user_id}"],
			'department_id' => ['required', 'numeric'],
			'role_id' => ['required', 'numeric'],
		];
	}

}
