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
			$numberUsers = $_POST['users'];
			$userString = '<br>';
			$firstNameFile = file('http://scrapmaker.com/data/wordlists/names/Given-Names(8,608).txt', FILE_IGNORE_NEW_LINES);
			$firstNameSize = count($firstNameFile);		
			$lastNameFile = file('http://scrapmaker.com/data/wordlists/names/surnames.txt', FILE_IGNORE_NEW_LINES);
			$lastNameSize = count($lastNameFile);		
			for($i = 0; $i < ($numberUsers) ; $i++) {
				$userString = $userString.ucfirst($firstNameFile[rand(0, $firstNameSize)]).'  '.ucfirst($lastNameFile[rand(0, $lastNameSize)]).'<br>';
			}
			return view('users')->with('output', $userString);
		}	

	}
