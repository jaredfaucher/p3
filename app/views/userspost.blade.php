@extends('_master')
		
@section('title')
	Random User Generator
@stop

@section('content')
	<a href="/">Home</a>
	<br>
	<!--<?php
		$numberOfUsers = Input::get('users');
		$birthday = Input::get('birthday');
		$profile = Input::get('profile');
		for ($i = 0; $i < $numberOfUsers; $i++)
		{
			require_once base_path().'/vendor/fzaninotto/faker/src/autoload.php';
			$faker = Faker\Factory::create();
			echo $faker->name;
			if ($birthday)
			{
				echo $faker->dateTimeThisCentury->format('Y-m-d');
			}
			if ($profile)
			{
				echo $faker->text;
			}
			echo "<br>";
		}
	?> -->

	@foreach($users as $user)
		{{ $user->name }}
		@if ($birthday)
			{{ $user->dateTimeThisCentury->format('Y-m-d') }}
		@if ($profile)
			{{ $user->text }}
		<br>
	@endforeach
@stop