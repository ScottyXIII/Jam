<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/login',  'Auth\AuthController@getLogin'); 
//Route::post('/login', 'Auth\AuthController@postLogin'); 

Route::get('/portfolio', 'PortfolioController@index');

Route::get('/services', function() { 
	return view('services');
});

Route::get('/about', function() { 
	return view('about');
});

Route::get('/contact', function() { 
	return view('contact');
});



// Admin routes 
Route::get('/jason', ['middleware' => 'auth', function () {
	return view('admin.home');
}]);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

});