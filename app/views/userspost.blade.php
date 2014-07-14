@extends('_master')
		
@section('title')
	Random User Generator
@stop

@section('content')
	<a href="/">Home</a>
	<br>
	<?php
		$numberOfUsers = Input::get('users');
		$birthday = Input::get('birthday');
		$profile = Input::get('profile');
		for ($i = 0; $i < $numberOfUsers; $i++)
		{
			require_once base_path().'/vendor/Faker/src/autoload.php';
			$faker = Faker\Factory::create();
			echo $faker->name;
			if ($birthday)
			{
				echo $faker->birthday;
			}
			if ($profile)
			{
				echo $faker->text;
			}
			echo "<br>";
		}
	?>
@stop