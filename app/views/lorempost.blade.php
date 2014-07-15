@extends('_master')
		
@section('title')
	Lorem Ipsum Generator
@stop

@section('content')
<a href="/">Home</a>
<<<<<<< HEAD
<br><br>
	@foreach($paragraphs as $paragraph)
		<p>
			{{ $paragraph }}
		</p>
		<br>
	@endforeach
=======
<br>
<?php
	$paragraphNumber = Input::get('paragraphNumber');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($paragraphNumber);
	echo implode('<p>', $paragraphs);
?>
>>>>>>> b2948057311fb85457082f2d89eca1236cc11faa
@stop