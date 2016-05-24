<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NeedController extends Controller
{
    public function index(Request $request){
        $view = View::make("need/add");
//        $requestData = $request->all();
        $view->with("subjectName", $request->get("subjectName"));
//        $view->with("description", $request->get("subjectName"));
        return $view;
    }
}
