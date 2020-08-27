<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Example of basic Service Container

// Route::get('/', function() {
// 	$container = new App\Container();

// 	$container->bind('example', function () {
// 		return new App\Example();
// 	});

// 	$example = $container->resolve('example');

// 	$example->go();
// });

Route::get('/', function() {
	return view('welcome');
});

Route::get('/contact', function() {
	return view('contact');
});

Route::get('/elements', function() {
	return view('elements');
});

Route::get('/generic', function() {
	return view('generic');
});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store')->name('articles.store');
Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::put('/articles/{article}', 'ArticlesController@update')->name('articles.update');

Route::get('/posts/{post}', 'PostsController@show');