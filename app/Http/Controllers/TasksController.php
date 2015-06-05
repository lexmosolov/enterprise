<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Task\TaskRequest;
use App\Http\Requests\Task\TaskUpdateRequest;
use App\Http\Requests\Task\TaskShowRequest;
use App\Task;
use App\User;
use Auth;
use Redirect;

class TasksController extends Controller {

	/**
	 * Display a listing of the task.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get root of task hierarchy (nulled parent_id)
//		$tasks = Task::with('childrenRecursive')->whereNull('parent_id')->get();
		$tasks = Auth::user()->allTasks;

		return view('tasks.index', compact('tasks'));
	}

	/**
	 * Show the form for creating a new task.
	 *
	 * @return Response
	 */
	public function create()
	{
		$users = User::all()->lists('name', 'id');
		$tasks = Task::all()->lists('name', 'id');

		return view('tasks.create', compact('users', 'tasks'));
	}

	/**
	 * Store a newly created task in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function store(TaskRequest $request)
	{
		Auth::user()->tasks()->create($request->all());

		return Redirect::route('tasks.index')->with('message', 'Task created');
	}

	/**
	 * Display the specified task.
	 *
	 * @param  \App\Task      $task
	 * @param TaskShowRequest $request
	 * @return Response
	 */
	public function show(Task $task, TaskShowRequest $request)
	{
		return view('tasks.show', compact('task'));
	}

	/**
	 * Show the form for editing the specified task.
	 *
	 * @param  \App\Task $task
	 * @return Response
	 */
	public function edit(Task $task)
	{
		$users = User::all()->lists('name', 'id');
		$tasks = Task::where('id', '!=', $task['id'])->lists('name', 'id'); // Load all tasks exclude current

		return view('tasks.edit', compact('task', 'users', 'tasks'));
	}

	/**
	 * Update the specified task in storage.
	 *
	 * @param  \App\Task $task
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
	public function update(Task $task, TaskUpdateRequest $request)
	{
		$task->update($request->all());

		return Redirect::route('tasks.show', $task)->with('message', 'Task updated.');
	}

	/**
	 * Remove the specified task from storage.
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





