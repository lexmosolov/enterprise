<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Mail;
use Redirect;

class SupportController extends Controller {

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function create()
	{
		return view('support.create');
	}

	/**
	 * Send the email message from the application support form to the admins.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function send(Request $request)
	{
		$this->validate($request, [
			'problem' => 'required|min:6'
		]);

		foreach(User::where('role_id', '=', 1)->get() as $admin){
			Mail::queue('emails.support', ['problem' => $request->problem], function($message) use ($admin)
			{
				$message->to($admin->email)->subject(Auth::user()->name . ' need a your help');
			});
		}

		return Redirect::action("DashboardController@index")->with('message', "Your problem has been sent to admins.");
	}

}
