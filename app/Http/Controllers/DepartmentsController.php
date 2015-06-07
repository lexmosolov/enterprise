<?php namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests;
use App\Http\Requests\DepartmentRequest;
use App\Organization;
use App\User;
use Redirect;

class DepartmentsController extends Controller {

	/**
	 * Display a listing of the department.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get root of department hierarchy (nulled parent_id)
		$departments = Department::with('childrenRecursive')->whereNull('parent_id')->get();

		return view('departments.index', compact('departments'));
	}

	/**
	 * Show the form for creating a new department.
	 *
	 * @return Response
	 */
	public function create()
	{
		$organizations = Organization::all()->lists('title', 'id');
		$users = User::all()->lists('name', 'id');
		$departments = Department::all()->lists('title', 'id');

		return view('departments.create', compact('organizations', 'users', 'departments'));
	}

	/**
	 * Store a newly created department in storage.
	 *
	 * @param DepartmentRequest $request
	 * @return Response
	 */
	public function store(DepartmentRequest $request)
	{
		$department = Department::create($request->all());
		$department->users()->sync((array)$request->user_list);

		return Redirect::action('DepartmentsController@index')->with('message', 'Department created.');
	}

	/**
	 * Display the specified department.
	 *
	 * @param Department $department
	 * @return Response
	 */
	public function show(Department $department)
	{
		return view('departments.show', compact('department'));
	}

	/**
	 * Show the form for editing the specified department.
	 *
	 * @param Department $department
	 * @return Response
	 */
	public function edit(Department $department)
	{
		$organizations = Organization::all()->lists('title', 'id');
		$users = User::all()->lists('name', 'id');
		$departments = Department::all()->lists('title', 'id');

		return view('departments.edit', compact('organizations', 'department', 'users', 'departments'));
	}

	/**
	 * Update the specified department in storage.
	 *
	 * @param Department        $department
	 * @param DepartmentRequest $request
	 * @return Response
	 */
	public function update(Department $department, DepartmentRequest $request)
	{
		$department->update($request->all());
		$department->users()->sync((array)$request->user_list);

		return Redirect::action('DepartmentsController@show', $department)->with('message', 'Department updated.');
	}

	/**
	 * Remove the specified department from storage.
	 *
	 * @param  Department $department
	 * @return Response
	 */
	public function destroy(Department $department, DepartmentRequest $request)
	{
		$department->delete();

		return Redirect::action('DepartmentsController@index')->with('message', 'Department deleted.');
	}

}
