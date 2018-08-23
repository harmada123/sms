@extends('layouts.admin')
@section('content')

    {!! Form::open(['method'=>'POST','action'=>'AdminUserController@store','files'=>true]) !!}
        <div class="form-group">
            {{Form::label('name','First Name:')}}
            {{Form::text('name',null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('middlename','Middle Name:')}}
            {{Form::text('middlename',null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('lastname','Last Name:')}}
            {{Form::text('lastname',null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::text('email',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','Password:') !!}
            {!! Form::password('password',['class'=> 'form-control' ]) !!}
        </div>
        <div class="form-group">
            {{Form::label('role','Role:')}}
            {{Form::select('role',array('Choose Options') + $roles,null,['class'=>'bootstrap-select form-control show-tick'])}}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id','Picture:') !!}
            {!! Form::file('photo_id',['class'=>'btn']) !!}
        </div>
        <div class="form-group">
            {{Form::submit('Create Users',['class'=>'btn btn-success'])}}
        </div>
    {!! Form::close() !!}
@endsection