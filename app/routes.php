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
	return View::make('hello');
});

Route::get('users',array('as'=>'userlist','uses'=>'UserController@index'));


Route::get('foo/bar', function()
{
    return 'Hello World';
});

Route::get('app', 'AppController@showWelcome');

Route::get('demo', function(){
	return View::make('demos.demo');
});
Route::get('test',function(){
	return View::make('demos.test');
});
Route::get('image',function(){
	return View::make('demos.image');
});
Route::get('imgmove',function(){
	return View::make('demos.imgmove');
});
Route::get('test1',function(){
	return View::make('demos.test1');
});
Route::get('test2',function(){
	return View::make('demos.test2');
});
Route::get('less01',function(){
	return View::make('demos.less01');
});
Route::get('js01',function(){
	return View::make('demos.js01');
});




