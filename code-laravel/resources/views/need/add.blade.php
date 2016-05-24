@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form method="POST" action="/need">
                {{csrf_field()}}
                <input class="form-control" type="text" name="subjectName" value="{{$subjectName}}" placeholder="your subject name">
                {{--<textarea name="description" value="{{$description}}"></textarea>--}}
                <textarea class="form-control" name="description" placeholder="describe your need"></textarea>
                <input type="submit" name="find" class="btn btn-default">
            </form>
        </div>
    </div>
@endsection