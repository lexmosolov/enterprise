<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Redirect;

abstract class Request extends FormRequest
{

	/**
	 * Redirect back with message for a forbidden auth operation.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function forbiddenResponse()
	{
		return Redirect::back()->with('message', 'Sorry but you have no rights to do this.');
	}

}
