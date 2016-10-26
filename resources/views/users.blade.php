@extends('layouts.master')

	@section('content')
		<h2> Generate Random Users</h2>
		
		<p>You can create up to 30 randomly generated fake users.</p> 
		<form method='POST' action='/users'>
			Enter Number of Users Desired : <br>
			{{ csrf_field() }}
			<input type='number' name='numberUsers' min="1" max="30"> <br>
			<input type='submit' value='Generate Users'>
		</form>

	@if(count($errors) > 0)
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
			
			
	<p> {!! $output or '' !!} </p>
	@stop
