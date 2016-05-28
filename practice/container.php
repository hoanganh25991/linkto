<?php
/**
 * with DI dependencies injection
 *
 * anything used in class X should pass through __construct()
 * 1. better for TEST/MOCK
 * 2. independency
 */

class XController{
	
	/**
	 * in CONTROLLER we need to access REQUEST
	 * how?, we have to pass it to this controller
	 * by something ??? too complicated
	 *
	 * IoC inversion of controll
	 * help us to do this with CONTAINER
	 * this container know how to create/get object
	 * (if not, through exception ^^)
	 */

	public function show(Request $request){
		//easily acces to $request, just declare him
		//we don't have to cast $request manually to XController
	}
}