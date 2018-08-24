@extends('layouts.admin')
@section('content')
    {!! Form::open(['method'=>'POST','action'=>'AdminUserController@store','files'=>true]) !!}
        <div class="form-group">

            {{Form::label('subject','Subject Name:')}}
            {{Form::text('subject',null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('course','Course:')}}
            {{Form::text('course',null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('year','Year Standing:')}}
            {{Form::text('year',null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::submit('Create Subject',['class'=>'btn btn-success'])}}
        </div>
    {!! Form::close() !!}
@endsection