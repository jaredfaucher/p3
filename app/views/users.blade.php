@extends('_master')
		
@section('title')
	Random User Generator
@stop

@section('content')
	<a href="/">Home</a>
	<h1>Random User Generator</h1>
	<p>Create random user data for your application.</p>
	<form method="post">
		How many Users? (max:99): <input type="text" name="paragraphs"><br>
		Include...<br>
		<input type="checkbox" name="birthday">Birthday<br>
		<input type="checkbox" name="profile">Profile<br>
		<input type="submit" value="submit">
	</form>
@stop