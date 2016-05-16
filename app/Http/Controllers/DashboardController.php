<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\UserGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

//use Zend\Stdlib\ArrayUtils;

;

class DashboardController extends Controller{

    public function __construct(){
//        $this->middleware("auth");
    }

    public function run(){
        $view = View::make("dashboard");
//        $user = Auth::user();
//        if($user){
//            $view->with("user", $user);
//            /**
//             * how to ensure that
//             * user-meta
//             * they can provide later
//             */
//            if(isset($user->meta)){
//                $meta = $user->meta;
//                $view->with("meta", $meta);
//            }
//        }
        /**
         * from user, base on map user-group >>> groups
         */
        //        $userGroups = UserGroup::with("group")->where("user_id", 1)->first();
        $user = Auth::user();
        $userGroups = UserGroup::with("group.need.subject")->where("user_id", Auth::user()->id)->get();
//         if($userGroups){
//             $userGroups = UserGroup::with("group.need.subject")->where("user_id", Auth::user()->id)->get();
//         }else{
//             //cast return to array empty
//             //rather than null @@
// //            $userGroups = ArrayUtils::iteratorToArray($userGroups);
//         }
//        $groups = array();
//        foreach($userGroups as $userGroup){
//            $groups[] = $userGroup->group;
//        }
        $view->with("user", $user);
//        $view->with("groups", $groups);
        $view->with("userGroups", $userGroups);
        return $view;
    }
}
