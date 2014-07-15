@extends('_master')
		
@section('title')
	Random User Generator
@stop

@section('content')
	<a href="/">Home</a>
	<h1>Random User Generator</h1>
	<br>
	<dl>
	<!-- foreach loop printing out each user in $users in description list -->
	@foreach($users as $user)
		<dt><u> {{ $user->name }} </u></dt>
		@if ($birthday)
			<dd><strong>Birthdate: </strong> {{ $user->dateTimeThisCentury->format('Y-m-d') }} </dd>
		@endif
		@if ($address)
			<dd><strong>Address: </strong>{{ $user->address }}</dd>
		@endif
		@if ($profile)
			<dd><strong>Profile: </strong> {{ $user->text }} </dd>
		@endif
		<br>
	@endforeach
	</dl>
@stop