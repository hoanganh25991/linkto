@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>existing group</h1>
            <ul class="list-group">
                {{$subject}}
                {{$userGroups}}
                {{$subjectName}}
                {{--!subject > need (subject) > group--}}
                {{--if subject > need > group--}}
                {{--@if($subject)--}}
                    {{--$needs = $subjects--}}
                    {{--<li>--}}
                        {{--<p>groupId: {{$group->id}}</p>--}}
                        {{--<p>subjectName: {{$subject->name}}</p>--}}
                        {{--<p>needDescription: {{$need->description}}</p>--}}
                        {{--<form method="POST" action="/group/join">--}}
                            {{--{{csrf_field()}}--}}
                            {{--<input type="hidden" name="groupID" value="{{$group->id}}">--}}
                            {{--<button>joinGroup</button>--}}
                        {{--</form>--}}
                    {{--</li>--}}
                {{--@endif--}}
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