<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class OrganizationRequest extends Request {

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
		$organization_id = $department_id = isset($this->organizations->id) ? $this->organizations->id : '';

		return [
			'title' => ['required', 'min:4', "unique:organizations,title,{$organization_id}"],
		];
	}

}
