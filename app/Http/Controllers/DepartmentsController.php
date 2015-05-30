<?php namespace App\Http\Controllers;

use App\Department;
use App\User;
use App\Http\Requests;
use App\Http\Requests\DepartmentRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Redirect;
use Illuminate\Support\Str;

class DepartmentsController extends Controller
{

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
		$users = User::all()->lists('name', 'id');
		return view('departments.create', compact('users'));
	}

	/**
	 * Store a newly created department in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function store(DepartmentRequest $request)
	{
		Department::create($request->all());
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
		$users = User::all()->lists('name', 'id');
		return view('departments.edit', compact('department', 'users'));
	}

	/**
	 * Update the specified department in storage.
	 *
	 * @param  \App\Project $project
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function update(Department $department, DepartmentRequest $request)
	{
		$department->update($request->all());
		return Redirect::action('DepartmentsController@show', $department)->with('message', 'Department updated.');
	}

	/**
	 * Remove the specified department from storage.
	 *
	 * @param  Department $department
	 * @return Response
	 */
	public function destroy(Department $department)
	{
		$department->delete();
		return Redirect::action('DepartmentsController@index')->with('message', 'Department deleted.');
	}

}
