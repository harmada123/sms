@extends('layouts.admin')
@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row clearfix">
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            @foreach($users as $user)
                                <tbody>
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->middlename}}</td>
                                    <td>{{$user->lastname}}</td>
                                    <td>
                                        <a href={{route('admin.edit',$user->id)}}>
                                            {{$user->email}}
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection