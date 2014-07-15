@extends('_master')
		
@section('title')
	Error Detected
@stop

@section('content')
	<a href="/">Home</a>
	<h1>Error Detected</h1>
	<br>
	<!-- Generic error page to deal with input validation.  Displays different value for $error -->
	<h4>
		You entered an incorrect value for the number of {{ $error }}.
		<br><br>
		<u>Please enter valid input!</u>
	</h4>
@stop