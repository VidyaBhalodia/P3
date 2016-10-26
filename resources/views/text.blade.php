@extends('layouts.master')

	
		@section('content')
			<h1> Generate Random Text</h1>
			<form method='POST' action='/text'>
				Enter Number of Paragraphs Desired : <br>
				{{ csrf_field() }}
				<input type='number' name='text'> <br>
				<input type='submit' value='Generate Text'>
			</form>
			
			{!! $output or '' !!}

		@stop
