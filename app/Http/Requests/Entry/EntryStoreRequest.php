<?php namespace App\Http\Requests\Entry;

use App\Entry;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class EntryStoreRequest extends EntryRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

}
