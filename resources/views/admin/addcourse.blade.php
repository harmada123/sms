@extends('layouts.admin')
@section('content')
    {!! Form::open(['method'=>'POST','action'=>'AdminUserController@store','files'=>true]) !!}
    <div class="form-group">
        {{Form::label('course','Course Name:')}}
        {{Form::text('course',null,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('description','Description:')}}
        {{Form::text('description',null,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('degree','Degree:')}}
        {{Form::select('degree', ['Bachelors' => 'Bachelors', 'Masteral' => 'Masteral','Doctorate' => 'Doctorate'], null,['class'=>'form-control'], ['placeholder' => 'Degree'])}}
    </div>
    <div class="form-group">
        {{Form::submit('Create Course',['class'=>'btn btn-success'])}}
    </div>
    {!! Form::close() !!}
@endsection