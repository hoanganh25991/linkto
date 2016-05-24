<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests;
use App\Need;
use App\Subject;
use App\UserGroup;
use App\UserNeed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class GroupController extends Controller{
    public function add(Request $request){
        $subjectName = $request->get("subjectName");
        $needDescription = $request->get("needDescription");

        $subject = Subject::where("name", $subjectName)->first();
        /**
         * save new subject
         */
        if(!$subject){
            $subject = new Subject();
            $subject->name = $subjectName;
            $subject->save();
        }

        /**
         * create new need
         */
        $need = new Need();
        $need->subject_id = $subject->id;
        $need->description = $needDescription;
        $need->save();

        /**
         * create new group
         */
        $group = new Group();
        $group->user_id = Auth::user()->id;
        $group->need_id = $need->id;
        $group->save();

        /**
         * map user - group
         */
        $userGroup = new UserGroup();
        $userGroup->user_id = Auth::user()->id;;
        $userGroup->group_id = $group->id;
        $userGroup->save();

        /**
         * map user - need
         */
        $userNeed = new UserNeed();
        $userNeed->user_id = Auth::user()->id;
        $userNeed->need_id = $need->id;
        $userNeed->save();

        /**
         * redirect to dashboard
         * 1. where show up, which one you joined
         * 2. which one you created
         * 3. which one pending...
         */
        return Redirect::to("dashboard");
    }

    public function view(Request $request){
        $view = View::make("group/view");

        $user = Auth::user();

        $groupId = $request->get("groupId");
        $group = Group::with("need.subject")->find($groupId);
        $need = $group->need;
        $subject = $need->subject;
        $userGroups = UserGroup::with("user")->where("group_id", $groupId)->get();

        $view->with("group", $group);
        $view->with("need", $need);
        $view->with("subject", $subject);
        $view->with("user", $user);
        $view->with("userGroups", $userGroups);

        return $view;
    }
}
