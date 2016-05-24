<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\MetaUser;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProfileController extends Controller
{
    public function index(){
        $view = View::make("user/profile");
        $user = Auth::user();
        $view->with("user", $user);
        if(isset($user->meta)){
            $view->with("meta", $user->meta);
        }
        return $view;
    }

    public function saveMeta(Request $request){
        $metaUser = new MetaUser();

        $metaUser->avatar = $request->get("avatar");
        $metaUser->phone = $request->get("phone");
        $metaUser->birthday = $request->get("birthday");
        $metaUser->gender = $request->get("gender");

        $metaUser->save();
    }
}
