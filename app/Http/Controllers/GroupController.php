<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests;
use App\Need;
use App\Subject;
use App\UserGroup;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class GroupController extends Controller
{
    public function add(Request $request){
        $subjectName = $request->get("subjectName");
        $needDescription = $request->get("needDescription");

        $subject = Subject::where("name", $subjectName)->first();
        if(!$subject){
            $subject = new Subject();
            $subject->name = $subjectName;
            $subject->save();
        }

        $need = new Need();
        $need->subject_id = $subject->id;
        $need->description = $needDescription;
        $need->save();

        $group = new Group();
        $group->user_id = Auth::user()->id;
        $group->need_id = $need->id;

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

        $groupId = $request->get("groupId");
        $group = Group::find($groupId);

        $userGroups = UserGroup::with("user.meta")->where("group_id", $groupId)->get();

        $view->with("group", $group);
        $view->with("userGroups", $userGroups);

        return $view;
    }
}
