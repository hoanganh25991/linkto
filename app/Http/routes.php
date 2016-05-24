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

//Route::get('/', function(){
//    return view('welcome');
//});

// Route::auth();

//Route::get('/home', 'HomeController@index');

// Route::post("/subscribe", "MailingListController@subscribe");

// Route::get("/subscribe", "MailingListController@index");


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
/*
|--------------------------------------------------------------------------
| Extend blade so we can define a variable
| <code>
| @define $variable = "whatever"
| </code>
|--------------------------------------------------------------------------
*/


Route::auth();
Route::get("/", function(){
    return view("welcome");
});

Route::group(array("middleware" => "auth"), function(){
    Route::get("dashboard", "DashboardController@run");
    Route::post("dashboard", "MatchController@run");

    Route::post("group/add", "GroupController@add");
    Route::post("group/view", "GroupController@add");

    Route::get("user/profile", "ProfileController@index");

    Route::get("match", "MatchController@run");
    Route::post("match", "MatchController@run");

    Route::get("user/settings", "UserController@settings");

});

Route::get("need", "NeedController@index");
Route::post("need", "NeedController@index");


