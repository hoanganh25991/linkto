@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{--display group--}}
            <p>
            <h1>existing group</h1>
            <ul class="list-group">
                {{$subjects}}
                {{$userGroups}}
                {{$subjectName}}
                <?php foreach($subjects as $subject){
                    $need = $subject->need;
                    $group = $need->group;
                    $joined = false;
                    foreach($userGroups as $userGroup){
                        $joinedGroup = $userGroup->group;
                        if($group->id === $joinedGroup->id){
                            $joined = true;
                        }
                    }
                   
                } ?>
            </ul>
            <h1>new group</h1>
            <form method="POST" action="/group/add">
                {{csrf_field()}}
                <input type="text" name="subjectName" value="{{$subjectName}}" class="form-control">
                <textarea rows="2" name="needDescription" class="form-control"></textarea>
                <input type="submit" name="create" value="createGroup" class="btn btn-default">
            </form>
        </div>
    </div>
    </div>
@endsection