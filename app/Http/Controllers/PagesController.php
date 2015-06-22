<?php

namespace hireme\Http\Controllers;

use Illuminate\Http\Request;

use hireme\Http\Requests;
use hireme\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {    	
    	return view('home');
    }
}
