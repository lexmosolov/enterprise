<?php namespace App\Http\Requests;

use App\Entry;
use Auth;

class EditEntryRequest extends Request
{

	/**
	 * Determine if the user is owner of entry to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		if (Auth::user()->hasRole('admin')) {
			return true;
		}
		$currentId = $this->route('entries')->id;
		return Entry::where('id', $currentId)
			->where('user_id', Auth::id())->exists();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [

		];
	}

}
