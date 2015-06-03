<?php namespace App\Http\Requests\Entry;

use App\Entry;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class EntryRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		if (Auth::user()->hasRole('admin'))
		{
			return true;
		}
		// Check that current entry exist and auth user is owner
		$currentId = $this->route('entries')->id;

		return Entry::where('id', $currentId)->where('user_id', Auth::id())->exists();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title' => ['required', 'min:3'],
			'body'  => ['required', 'min:5'],
		];
	}

}
