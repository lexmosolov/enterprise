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

		\Debugbar::info(Str::slug("test"));
		\Debugbar::info(Str::slug("тест"));

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
	 * @return Response
	 */
	public function store()
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
		$department->update($input);

		return Redirect::route('projects.show', $department->slug)->with('message', 'Project updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function destroy($id)
	{

	}

}
