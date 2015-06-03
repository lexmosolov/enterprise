<?php namespace App\Http\Requests\Entry;

use App\Entry;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class EntryDestroyRequest extends EntryRequest {


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
