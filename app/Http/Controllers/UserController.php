<?php

namespace hireme\Http\Controllers;

use Cookie;
use Request;
use Image;
use Input;
use File;
use Response;
use View;

use hireme\Http\Requests;
use hireme\Http\Controllers\Controller;
use hireme\User;

class UserController extends Controller
{
    function __construct()
    {
    	$this->user_id = Cookie::get('user_id');
    }

    public function profile() {
    	$user = User::find($this->user_id);

    	return view('profile', compact('user'));
    }

    public function create()
    {
    	return view('user.create');
    }

    public function store()
    {
    	$user_input = Request::all();

    	$user = User::create($user_input);
    	return view('login');
    }

    public function edit() {
    	$user = User::find($this->user_id);

    	return view('edit.profile', compact('user'));
    }
}
