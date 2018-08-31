@extends('layouts.admin')
@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row clearfix">
                    {{Form::model($users,['method'=>'Patch','action'=>['AdminUserController@update',$users],'files'=>true])}}
                    <div class="form-group">
                        <div class="form-line">
                            {{Form::label('name','First Name:')}}
                            {{Form::text('name',null,['class'=>'form-control','placeholder'=>'Name'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            {{Form::label('middlename','Middle Name:')}}
                            {{Form::text('middlename',null,['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            {{Form::label('lastname','Last Name:')}}
                            {{Form::text('lastname',null,['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            {!! Form::label('email','Email:') !!}
                            {!! Form::text('email',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            {!! Form::label('password','Password:') !!}
                            {!! Form::password('password',['class'=> 'form-control' ]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            {{Form::label('role','Role:')}}
                            {{Form::select('role',array('Choose Options') + $roles,null,['class'=>'bootstrap-select form-control show-tick'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            {!! Form::label('photo_id','Picture:') !!}
                            {!! Form::file('photo_id',['class'=>'btn']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::submit('Edit Users',['class'=>'btn btn-success'])}}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
