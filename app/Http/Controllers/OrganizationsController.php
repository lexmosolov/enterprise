<?php namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Redirect;
use Symfony\Component\Security\Core\User\User;

class OrganizationsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$organizations = Organization::all();

		return view('organizations.index', compact('organizations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$departments = Department::lists('title', 'id'); // All?

		return view('organizations.create', compact('departments'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$organization = Organization::create($request->all());

		return Redirect::action('OrganizationsController@index')->with('message', 'Organization created.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param Organization $organization
	 * @return Response
	 */
	public function show(Organization $organization)
	{
		return view('organizations.show', compact('organization'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Organization $organization
	 * @return Response
	 */
	public function edit(Organization $organization)
	{
		$departments = Department::lists('title', 'id');

		return view('organizations.edit', compact('organization', 'departments'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Organization $organization
	 * @return Response
	 */
	public function update(Organization $organization, Request $request)
	{
		$organization->update($request->all());

		return Redirect::action('OrganizationsController@show', $organization)->with('message', 'Organization updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param Organization $organization
	 * @return Response
	 */
	public function destroy(Organization $organization)
	{
		$organization->delete();

		return Redirect::route('organizations.index')->with('message', 'Organization deleted.');
	}

}
