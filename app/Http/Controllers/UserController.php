<?php

namespace LoremIpsum\Http\Controllers;

use Illuminate\Http\Request;

use LoremIpsum\Http\Requests;

class UserController extends Controller
{
    	public function index()
    	{
			return view('users');
    	}
		public function generate(Request $request)
		{
			 return view('users')->with('output', $_POST['users']);
		}	

	}
