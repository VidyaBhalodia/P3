@extends('layouts.master')

    <section>
		@section('content')
			<h1> Generate Random Users</h1>
			
			<form method='POST' action='/users'>
				{{ csrf_field() }}
				Enter Number of Users Desired : <br>
				<input type='number' name='users'> <br>
				<input type='submit' value='Generate Users'>
			</form>

			{{ $output or '' }}
		@stop
    </section>
