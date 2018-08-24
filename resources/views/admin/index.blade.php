@extends('layouts.admin')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <a href="{{route('admin.create')}}">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">Add User</div>
                        {{--<div class="number count-to" data-from="0" data-to="Add User" data-speed="1000" data-fresh-interval="20"></div>--}}
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-blue hover-expand-effect">
                <a href="{{route('course.index')}}">
                    <div class="icon">
                        <i class="material-icons">library_add</i>
                    </div>
                    <div class="content">
                        <div class="text">Add Course</div>
                        {{--<div class="number count-to" data-from="0" data-to="Add User" data-speed="1000" data-fresh-interval="20"></div>--}}
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-red hover-expand-effect">
                <a href="{{route('subject.index')}}">
                    <div class="icon">
                        <i class="material-icons">file_download</i>
                    </div>
                    <div class="content">
                        <div class="text">Add Subject</div>
                        {{--<div class="number count-to" data-from="0" data-to="Add User" data-speed="1000" data-fresh-interval="20"></div>--}}
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{--@foreach($roles as $role)--}}
        {{--{{Auth::user()->role}}--}}
    {{--@endforeach--}}
    {{--{{Auth::user()->role->role}}--}}
@endsection()
