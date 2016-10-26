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
		
			$this->validate($request, ['numberParagraphs' => 'required|integer|min:1|max:15',]);

			$numberParagraphs = $_POST['numberParagraphs'];
			$lipsum = new \joshtronic\LoremIpsum();
			$paragraphs = $lipsum->paragraphs($numberParagraphs, 'p');
			return view('text')->with('output', $paragraphs);
		}	
};
