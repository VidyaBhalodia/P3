<?php

namespace LoremIpsum\Http\Controllers;

use Illuminate\Http\Request;

use LoremIpsum\Http\Requests;

class TextController extends Controller
{
	public function index()
		{
			return view('text');
		}	
		
	public function generate(Request $request)
		{
			 return view('text')->with('output', $_POST['text']);
		}	
};
