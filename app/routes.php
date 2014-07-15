<?php

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/lorem-ipsum', function()
{
	return View::make('lorem');
});
Route::post('/lorem-ipsum', function()
{
	// Input validation, returns error view if user enters non-integer or integer not in range
	$paragraphNumber = Input::get('paragraphNumber');
	if (!ctype_digit($paragraphNumber) || ($paragraphNumber > 99 || $paragraphNumber < 1))
	{
		return View::make('error')->with('error', 'paragraphs');
	}
	else
	{
		// generates paragraphs with generator into $paragraphs array and returns view with array
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($paragraphNumber);	
		return View::make('lorempost')->with('paragraphs', $paragraphs);
	}
});
Route::get('/user-generator', function()
{
	return View::make('users');
});

Route::post('/user-generator', function()
{
	// Input validation, returns error view if user enters non-integer or integer not in range
	$numberOfUsers = Input::get('users');
	if (!ctype_digit($numberOfUsers) || ($numberOfUsers > 99 || $numberOfUsers < 1))
	{
		return View::make('error')->with('error', 'users');
	}
	else
	{
		// gets input from checkboxes to be passed through view
		$birthday = Input::get('birthday');
		$address = Input::get('address');
		$profile = Input::get('profile');

		// generates new user $numberOfUsers times and adds into user array
		for ($i = 0; $i < $numberOfUsers; $i++)
		{
			require_once base_path().'/vendor/fzaninotto/faker/src/autoload.php';
			$faker = Faker\Factory::create();
			$users[$i] = $faker;
		}
		// returns view with $users array and booleans for $birthday, $address, $profile
		return View::make('userspost')->with('users', $users)
									  ->with('birthday', $birthday)
									  ->with('address', $address)
									  ->with('profile', $profile);
	}
});