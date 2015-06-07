<?php namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\User\UserRequest;
use App\Role;
use App\User;
use Redirect;

class UsersController extends Controller
{

	/**
	 * Display a listing of the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::with('role')->get();

		return view('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new user.
	 *
	 * @return Response
	 */
	public function create(CreateUserRequest $request)
	{
		$departments = Department::all()->lists('title', 'id');;
		$roles = Role::all()->lists('title', 'id');;

		return view('users.create', compact('departments', 'roles'));
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @param UserRequest $request
	 * @return Response
	 */
	public function store(UserRequest $request)
	{
		User::create($request->all());
		$user->departments()->sync((array)$request->department_list);

		return Redirect::action('UsersController@index')->with('message', 'User created.');
	}

	/**
	 * Display the specified user.
	 *
	 * @param User $user
	 * @return Response
	 */
	public function show(User $user)
	{
		return view('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param User $user
	 * @return Response
	 */
	public function edit(User $user)
	{
		$departments = Department::all()->lists('title', 'id');;
		$roles = Role::all()->lists('title', 'id');;

		return view('users.edit', compact('user', 'departments', 'roles'));
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param User              $user
	 * @param UpdateUserRequest $request
	 * @return Response
	 */
	public function update(User $user, UserRequest $request)
	{
		$user->update($request->all());
		$user->departments()->sync((array)$request->department_list);

		return Redirect::action('UsersController@show', $user)->with('message', 'User updated.');
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param User        $user
	 * @param UserRequest $request
	 * @return Response
	 * @throws \Exception
	 * @internal param int $id
	 */
	public function destroy(User $user)
	{
		$user->delete();

		return Redirect::action('UsersController@index')->with('message', 'User deleted.');
	}

}
