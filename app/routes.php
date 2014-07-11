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
	echo implode('<p>', $paragraphs);
});
Route::get('/user-generator', function()
{
	return View::make('users');
});

Route::post('/user-generator', function()
{
	require_once base_path().'/vendor/Faker/src/autoload.php';
	$faker = Faker\Factory::create();
	echo $faker->name;
	echo $faker->address;
	echo $faker->text;
});

