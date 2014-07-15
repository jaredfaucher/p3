## README - P3 - Jared Faucher

# Live URL:
http://p3-jaredf.rhcloud.com/

# Description:

My project is a Lorem Ipsum and Random User generator.  Using HTML/CSS, PHP, Laravel and Blade I created an application where the use chooses which feature they want to use from the homepage, enters how many paragraphs of text or how many users would like and the application returns the desired information.  The user can also choose whether to also include the generated users' birthdate, address and profile blurb.

# Details:

My web application is pretty straight forward as you just click the link to which feature you want from the homepage and simply submit a short form with how many paragraphs/useres you want, but there are a few features I would like to discuss.  

The main feature I would like to draw attention to is the input validation used in the routes.php file.  For both the "Route::post('/lorem-ipsum',...)"" and "Route::post('/user-generator',...)"" routes I check the input that the user has given for the number of paragraphs/users they would like.  If they do not enter a valid input then it redirects them to the "error" view, generated with the error.blade.php file.  Besides that this application is very simple and should not give you any trouble!

# Plugins/Libraries/Etc:

	- Bootstrap: http://getbootstrap.com/ 
	- Lorem Ipsum Generator: https://packagist.org/packages/badcow/lorem-ipsum
	- User Generator: https://packagist.org/packages/fzaninotto/faker