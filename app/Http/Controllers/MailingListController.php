<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MailingListController extends Controller
{
    public function index(){
    	return view("form-subscribe");
    }
    public function subscribe(Request $request){
    	$email = $request->get("email");
    	return view("form-subscribe", compact("email"));
    }
}
