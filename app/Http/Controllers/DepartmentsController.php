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
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		\Debugbar::info(Str::slug("тест такой"));

		$departments = Department::all();

		return view('departments.index', compact('departments'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$users = User::all();
		return view('departments.create', compact('users'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function store(DepartmentRequest $request)
	{
		$input = Input::all();
		$input['slug'] = Str::slug($input['name']);
		Department::create($input);
		return Redirect::route('departments.index')->with('message', 'Department created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param Department $department
	 * @return Response
	 */
	public function show(Department $department)
	{
		return view('departments.show', compact('department'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Department $department
	 * @return Response
	 */
	public function edit(Department $department)
	{
		$users = User::all();
		return view('departments.edit', compact('department', 'users'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Project $project
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function update(Department $department, DepartmentRequest $request)
	{
		$input = array_except(Input::all(), '_method');
		$input['slug'] = Str::slug($input['name']);
		$department->update($input);
		return Redirect::route('departments.show', $department->slug)->with('message', 'Department updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Department $department
	 * @return Response
	 */
	public function destroy(Department $department)
	{
		$department->delete();
		return Redirect::route('departments.index')->with('message', 'Department deleted.');
	}

}
