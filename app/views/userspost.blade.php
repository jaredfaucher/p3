@extends('_master')
		
@section('title')
	Random User Generator
@stop

@section('content')
	<a href="/">Home</a>
	<br>
	@foreach($users as $user)
		{{ $user->name }}
		@if ($birthday)
			{{ $user->dateTimeThisCentury->format('Y-m-d') }}
		@endif
		@if ($profile)
			{{ $user->text }}
		@endif
		<br>
	@endforeach
@stop