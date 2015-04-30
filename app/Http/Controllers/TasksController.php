<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\TaskRequest;
use App\Task;
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
		$tasks = Task::all();
		return view('tasks.index', compact('tasks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tasks.create');
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
		return view('tasks.edit', compact('task'));
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





