@extends('_master')
		
@section('title')
	Lorem Ipsum Generator
@stop

@section('content')
<a href="/">Home</a>
<br><br>
	@foreach($paragraphs as $paragraph)
		<p>
			{{ $paragraph }}
		</p>
		<br>
	@endforeach

@stop