@extends('layouts.master')

	@section('content')
		<h1> Generate Random Text</h1>
		
		<p>You can create up to 15 paragraphs of lorem ipsum text.</p> 
		<form method='POST' action='/text'>
			Enter Number of Paragraphs Desired : <br>
			{{ csrf_field() }}
			<input type='number' name='numberParagraphs' min="1" max="15"> <br>
			<input type='submit' value='Generate Text'>
		</form>

	@if(count($errors) > 0)
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! $output or '' !!}

	@stop
