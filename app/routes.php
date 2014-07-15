<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

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
	$paragraphNumber = Input::get('paragraphNumber');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($paragraphNumber);	
	return View::make('lorempost')->with('paragraphs', $paragraphs);
});
Route::get('/user-generator', function()
{
	return View::make('users');
});

Route::post('/user-generator', function()
{
	$numberOfUsers = Input::get('users');
	$birthday = Input::get('birthday');
	$profile = Input::get('profile');

	for ($i = 0; $i < $numberOfUsers; $i++)
	{
		require_once base_path().'/vendor/fzaninotto/faker/src/autoload.php';
		$faker = Faker\Factory::create();
		$users[$i] = $faker;
	}
	return View::make('userspost')->with('users', $users)
								  ->with('birthday', $birthday)
								  ->with('profile', $profile);
});