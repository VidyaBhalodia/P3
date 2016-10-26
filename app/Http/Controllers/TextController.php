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
			$numberParagraphs = $_POST['text'];
			$lipsum = new \joshtronic\LoremIpsum();
			$paragraphs = $lipsum->paragraphs($numberParagraphs, 'p');
			return view('text')->with('output', $paragraphs);
		}	
};
