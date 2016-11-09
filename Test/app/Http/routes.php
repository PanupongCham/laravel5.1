<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller('test','ImplicitController');

class MyClass{
	public $foo = 'bar';
}
Route::get('/myclass','ImplicitController@index');
Route::get('/foo/bar','UriController@index');

Route::get('/register',function(){
	return view('register');
});

Route::get('/test', function(){
	return view('test');
});

Route::get('/test2', function(){
	return view('test2');
});