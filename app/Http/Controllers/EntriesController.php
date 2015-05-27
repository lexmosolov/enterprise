<?php namespace App\Http\Controllers;

use App\Department;
use App\Entry;
use App\Http\Requests;
use App\Http\Requests\EditEntryRequest;
use App\Http\Requests\EntryRequest;
use App\User;
use Auth;
use Redirect;
use Response;

class EntriesController extends Controller
{

	/**
	 * Display a listing of the entry.
	 *
	 * @return Response
	 */
	public function index()
	{
		$entries = Auth::user()->entriesForShow();
		return view('entries.index', compact('entries'));
	}

	/**
	 * Show the form for creating a new entry.
	 *
	 * @return Response
	 */
	public function create()
	{
		$users = User::lists('name', 'id');
		$departments = Department::lists('title', 'id');
		return view('entries.create', compact('users', 'departments'));
	}

	/**
	 * Store a newly created entry in storage.
	 *
	 * @param EntryRequest $request
	 * @return Response
	 */
	public function store(EntryRequest $request)
	{
		$this->createArticle($request);
		return Redirect::route('entries.index')->with('message', 'Entry created.');
	}

	/**
	 * Create a newly entry by a current user.
	 *
	 * @param EntryRequest $request
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	private function createArticle(EntryRequest $request)
	{
		$entry = Auth::user()->entries()->create($request->all());
		$this->syncEntry($entry, $request);
		return $entry;
	}

	/**
	 * Sync up the lists of users and departments in the database.
	 *
	 * @param Entry $entry
	 * @param EntryRequest $request
	 */
	private function syncEntry(Entry $entry, EntryRequest $request)
	{
		$entry->users()->sync((array)$request->input('user_list'));
		$entry->departments()->sync((array)$request->input('department_list'));
	}

	// TODO: write permission request

	/**
	 * Display the specified entry.
	 *
	 * @param Entry $entry
	 * @return Response
	 * @internal param EntryRequest $request
	 */
	public function show(Entry $entry)
	{
		return view('entries.show', compact('entry'));
	}

	/**
	 * Show the form for editing the specified entry.
	 *
	 * @return Response
	 */
	public function edit(Entry $entry, EditEntryRequest $request)
	{
		$users = User::lists('name', 'id');
		$departments = Department::lists('title', 'id');
		return view('entries.edit', compact('entry', 'users', 'departments'));
	}

	/**
	 * Update the specified entry in storage.
	 *
	 * @param EntryRequest $request
	 * @return Response
	 */
	public function update(Entry $entry, EntryRequest $request)
	{
		$entry->update($request->all());
		$this->syncEntry($entry, $request);
		return Redirect::route('entries.show', $entry)->with('message', 'Entry updated.');
	}

	/**
	 * Remove the specified entry from storage.
	 *
	 * @return Response
	 */
	public function destroy(Entry $entry, EditEntryRequest $request)
	{
		$entry->delete();
		return Redirect::route('entries.index')->with('message', 'Entry deleted.');
	}

}
