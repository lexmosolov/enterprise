<?php namespace App\Http\Controllers;

class DashboardController extends Controller {

	/**
	 * Display a dashboard.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('dashboard.index');
	}

}
