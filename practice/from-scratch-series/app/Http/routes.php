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

Route::get("/test", function(){
	return "this is a test page, try to using laravel route";
});

Route::get("/test/return/data", function(){
	$data = array("name" => "anh", "age" => 25);
	return $data;
});

Route::get("/test/view", function(){
	$view = View::make("test-view");
	$people = array("anh", "minh", "khoa");
	$people = [];
	$view->with(compact("people"));
	return $view;
});
