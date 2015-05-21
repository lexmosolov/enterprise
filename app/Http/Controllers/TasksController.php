<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\TaskRequest;
use App\Task;
use App\User;
use Redirect;

class TasksController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tasks = Task::with('guarantor', 'performer')->get();
		return view('tasks.index', compact('tasks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$users = User::all()->lists('name', 'id');
		return view('tasks.create', compact('users'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function store(TaskRequest $request)
	{
		$input = $request->all();
		Task::create($input);
		return Redirect::route('tasks.index')->with('message', 'Task created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Task $task
	 * @return Response
	 */
	public function show(Task $task)
	{
		return view('tasks.show', compact('task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Task $task
	 * @return Response
	 */
	public function edit(Task $task)
	{
		$users = User::all()->lists('name', 'id');
		return view('tasks.edit', compact('task', 'users'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Task $task
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function update(Task $task, TaskRequest $request)
	{
		$input = $request->all();
		$task->update($input);
		return Redirect::route('tasks.show', $task)->with('message', 'Task updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Task $task
	 * @return Response
	 */
	public function destroy(Task $task)
	{
		$task->delete();
		return Redirect::route('tasks.index')->with('message', 'Task deleted.');
	}

}





