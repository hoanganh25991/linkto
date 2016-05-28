<?php
/**
 * laravel try to generate model for us base on URL
 *
 * Route::get("user/{user}", function(App\User $user){
 * 		//dosth, $user we get is App\User::findOrFail({user});
 * 		//{user} here is the ID, what if, we want to EXPLICIT use
 * 		//"user-name"
 * 		//$user from App\User::where("userName", "=", $userName)->firstOrFail();
 * });
 *
 * REGISTER in provider, \Route::bind("user", function($userName){
 * 		return App\User::where("userName", "=", $userName)->firstOrFail();
 * })
 */