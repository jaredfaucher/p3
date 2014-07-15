@extends('_master')
		
@section('title')
	Random User Generator
@stop

@section('content')
	<a href="/">Home</a>
	<br><br>
	<dl>
	@foreach($users as $user)
		<dt> {{ $user->name }} </dt>
		@if ($birthday)
			<dd> {{ $user->dateTimeThisCentury->format('Y-m-d') }} </dd>
		@endif
		@if ($profile)
			<dd> {{ $user->text }} </dd>
		@endif
		<br>
	@endforeach
	</dl>
@stop