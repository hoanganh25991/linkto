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

// Route::auth();

Route::get('/home', 'HomeController@index');

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


//Route::group(array("middleware" => "web"), function(){
    Route::auth();
    Route::get("/", function(){
        return view("welcome");
    });

    Route::group(array("before" => "auth"), function(){
        Route::get("dashboard", "DashboardController@index");
//        Route::post("dashboard", "DashboardController@index");
    });

    Route::get("need", "NeedController@index");
    Route::post("need", "NeedController@index");

//    Route::get("match", "MatchController@index");
    Route::post("match", "MatchController@run");

    Route::get("join-group", "MatchController@join");
    Route::post("join-group", "MatchController@join");

    Route::get("group/add", "GroupController@add");
    Route::post("group/add", "GroupController@add");

    Route::get("group/view", "GroupController@view");
    Route::post("group/view", "GroupController@view");

    Route::get("user/profile", "ProfileController@index");
//});

