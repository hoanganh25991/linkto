<?php
/**
 * Route::get("admin/user");
 * Route::get("admin/need");
 * Route::get("admin/group");
 *
 * turn into group like this
 *
 * Route::group(["prefix" => "admin"], function(){
 * 		Route::get("user");
 * 		Route::get("need");
 * 		Route::get("group");
 * });
 */