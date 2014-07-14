@extends('_master')
		
@section('title')
	Lorem Ipsum Generator
@stop

@section('content')
<a href="/">Home</a>
<br>
<?php
	$paragraphNumber = Input::get('paragraphNumber');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($paragraphNumber);
	echo implode('<p>', $paragraphs);
?>
@stop