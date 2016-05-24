<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Subject;
use App\UserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class MatchController extends Controller{
    public function run(Request $request){
        $view = View::make("match");
        $subjectName = $request->get("subjectName");
        /**
         * base on subject name, which user need
         * to find out mentor, query databse, show
         * 1. Existing Group
         * 2. Ask him to create new one
         * (if he doesn't want to join any group)
         */
        /** @var object/null $subject
         * if has subject > need > group
         * if not, create new one
         */
        /**
         * subject is unique
         */
        $subject = Subject::with("need.group")->where("name", $subjectName)->first();
        //NORMAL
        //        if($subject){
        //            $needs = $subject->need;
        //            foreach($needs as $need){
        //
        //            }
        //        }
        /**
         * omit groups which this user is a leader/joined
         */
        //user | group | map user-group
        //when loop subject > need > group (inside group is a need, inside need is subject)
        //GROUP has no info about user
        //USER has no info about group
        //map user-group tell us that
        //query map user group >>> groups which this user joined (3/4/5 items)
        //when foreach on view, if array_diff/... in php
        //to figure out group user HAS JOINED
        /**
         * get out groups, which user joined
         * @var array $userGroups
         */
        $userGroups = UserGroup::with("group")->where("user_id", Auth::user()->id)->get();

        /**
         * handle data for view
         */

                $view->with("subject", $subject);
                $view->with("userGroups", $userGroups);
                $view->with("subjectName", $subjectName);
        //        $view->compact($subject);
        //        $view->compact($userGroups);
        //        $view->compact($subjectName);

        return $view;
    }

    public function join(Request $request){
        /**
         * table user_group
         * map user---group
         */
        $userId = Auth::user()->id;
        $groupId = $request->get("groupId");
        $userGroup = new UserGroup();
        $userGroup->user_id = $userId;
        $userGroup->group_id = $groupId;
        $userGroup->save();
        /**
         * after save map user-group
         * push user back to dashboard to review
         * where he join
         * if user is leader >>> he can click on group to edit
         * if user is member >>> review group
         */
        return Redirect::to("dashboard");

    }
}
