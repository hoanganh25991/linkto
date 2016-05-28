<?php
/**
 * MESSAGE
 *
 * in web, we usually inform user with message when sth go wrong,..
 * but if they go back to that page, nothing more
 * FLASH MESSAGE (offcourse through SESSION)
 */
Session::flash("key", "value");

/**
 * in blade view, use it
 */
@if(Session::has("key"))
	<li>{{Session::get("key")}}</li>
@endif