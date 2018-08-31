@extends('layouts.admin')
@section('css')
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        All Users
                        <small>List of All Users</small>
                    </h2>
                    <div class="body table-responsive">
                        <table class="table" id="users">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                        </table>
                        <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
                        <script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
                        <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
                        <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
                        <script type="text/javascript">
                            $(function() {
                                $('#users').DataTable({
                                    processing: true,
                                    serverSide: true,
                                    ajax: '/sms/public/users/get_datatable',
                                    columns : [
                                        {data: 'id'},
                                        {data: 'name'},
                                        {data: 'middlename'},
                                        {data: 'lastname'},
                                        {data: 'email',
                                            "render": function(data, type, row, meta){
                                                if(type === 'display'){
                                                    data = '<a href="' + 'admin/'+ row.id +'/edit'+'">' + data + '</a>';
                                                }

                                                return data;
                                            }
                                        },
                                    ],
                                    pageLength: 5,
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
