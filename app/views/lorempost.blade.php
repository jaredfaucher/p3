@extends('_master')
		
@section('title')
	Lorem Ipsum Generator
@stop

@section('content')
	<a href="/">Go Home</a>
	<h1>Lorem Ipsum Generator</h1>
	<br>
	<!-- foreach loop printing out each paragraph in $paragraph between <p> tags -->
	@foreach($paragraphs as $paragraph)
		<p>
			{{ $paragraph }}
		</p>
	@endforeach
	<br>
@stop