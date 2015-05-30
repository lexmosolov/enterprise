<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Redirect;

abstract class Request extends FormRequest
{

	protected $message = 'Sorry but you can not do this.';

	/**
	 * Redirect back with message for a forbidden auth operation.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function forbiddenResponse()
	{
		return Redirect::back()->with('message', $this->message);
	}

}
