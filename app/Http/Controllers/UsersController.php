<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Department;
use App\Role;
use App\User;
use Redirect;

class UsersController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return view('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$departments = Department::all()->lists('title', 'id');;
		$roles = Role::all()->lists('title', 'id');;
		return view('users.create', compact('departments', 'roles'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserRequest $request)
	{
		User::create($request->all());
		return Redirect::route('users.index')->with('message', 'User created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function show(User $user)
	{
		return view('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function edit(User $user)
	{
		$departments = Department::all()->lists('title', 'id');;
		$roles = Role::all()->lists('title', 'id');;
		return view('users.edit', compact('user', 'departments', 'roles'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function update(User $user, UserRequest $request)
	{
		$user->update($request->all());
		return Redirect::route('users.show', $user)->with('message', 'User updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function destroy(User $user)
	{
		$user->delete();
		return Redirect::route('users.index', $user)->with('message', 'User deleted.');
	}

}
