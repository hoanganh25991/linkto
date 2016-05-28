<?php
/**
 * in laravel, middleware exist in 2 form
 * 1. global
 * 2. inside route
 */

/**
 * GLOBAL
 * when declare global, we can group route under this middleware
 * Route::get("group => array("before" => "web")", function(){
 * 	Route::get("xyz");
 * 	Route::get("xyz");
 * 	Route::get("xyz");
 * 	Route::get("xyz");
 * });
 */

/**
 * INSIDE ROUTE
 *
 * class NoteController{
 * 	public function __construct(){
 * 		$this->middleware("<name>");
 * 	}
 * }
 *
 * Route::get("/note", "NoteController@store")->middleware("<name>");
 */