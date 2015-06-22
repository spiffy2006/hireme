<?php

namespace hireme\Http\Controllers;

use Request;

use hireme\Http\Requests;
use hireme\Http\Controllers\Controller;
use hireme\Entries;
use hireme\User;

class EntriesController extends Controller
{
    public function show($id)
    {
    	$entry = Entries::find($id);

    	return view('entries.entry', compact('entry'));
    }

    public function create()
    {
    	if(!\Auth::check()) {
    		App::abort(401);
    	}

    	return view('entries.create');
    }

    public function store()
    {
    	$entry = new Entries(Request::all());
    	\Auth::user()->entries()->save($entry);
    	return view('entries.create');
    }

    public function edit($id)
    {
    	if(!\Auth::check()) {
    		App::abort(401);
    	}

    	$entry = Entries::findOrFail($id);

    	return view('entries.edit', compact('entry'));
    }

    public function update($id)
    {
    	$entry = Entries::findOrFail($id);

    	$entry->update(Request::all());

    	return redirect('entries');
    }

    public function destroy($id)
    {
    	//
    }

    public function index()
    {    	
    	$entries = Entries::where('public', '=', true)->get();

    	return view('entries.index', compact('entries'));
    }

    public function entries_by_user($username)
    {    	
    	$user_id = User::where('username', $username)->get(['id'])->first()->id;
    	$entries = Entries::where('user_id', $user_id)->get();

    	return view('entries.index', compact('entries'));
    }

    public function popular()
    {
    	$entries = Entries::orderBy('likes', 'desc')->limit(30)->get();

    	return view('popular', compact('entries'));
    }

    public function recent()
    {
    	$entries = Entries::latest()->limit(30)->get();

    	return view('recent', compact('entries'));
    }
}
