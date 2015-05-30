<?php namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use Redirect;

class ProfileController extends Controller
{

	/**
	 * Show the application profile edit form to the user.
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function edit()
	{
		$user = Auth::user();
		return view('profile.edit', compact('user'));
	}

	/**
	 * Send the email message from the application support form to the admins.
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(Request $request)
	{
		$user_id = Auth::user()->id;
		$this->validate($request, [
			'email' => ['required', 'email', "unique:users,email,{$user_id}"],
			'password' => ['required']
		]);

		$request['password'] = Hash::make($request['password']);
		Auth::user()->update($request->all());

		return Redirect::action("DashboardController@index")->with('message', "Your profile has been successfully saved.");
	}

}
