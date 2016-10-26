@extends('layouts.master')

		@section('content')
			<h1> Generate Random Users</h1>
			
			<form method='POST' action='/users'>
				Enter Number of Users Desired : <br>
				{{ csrf_field() }}
				<input type='number' name='users'> <br>
				<input type='submit' value='Generate Users'>
			</form>

			<p> {!! $output or '' !!} </p>
		@stop
