@extends('admin/mastertemplate')

@section('pg-name')
Client List
@endsection

@section('title')
Client List
@endsection
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a href="{{route('viewaddclient')}}"><button type="button" class="btn btn-info float-right"
                        style="background:#5711B2;">
                        Add New
                    </button></a>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Client Name</th>
                            <th>Company Name</th>
                            <th>Client Phone</th>
                            <th>Client Email</th>
                            <th>Office Address</th>
                            <th style="width: 10%;">View</th>
                            <th style="width: 10%;">Edit</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($showclients as $showclient)
                        <tr>
                            <td>{{$showclient->client_name}}</td>
                            <td>{{$showclient->company_name}}</td>
                            <td>{{$showclient->client_phone}}</td>
                            <td>{{$showclient->client_email}}</td>
                            <td>{{$showclient->office_address}}</td>
                            <td> <a href="{{'view/'.$showclient->id}}"><button type="button"
                                        class="btn btn-block btn-primary btn-sm">View</button></a></td>
                            <td> <a href="{{'edit/'.$showclient->id}}"><button type="button"
                                        class="btn btn-block btn-primary btn-sm">Edit</button></a></td>


                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

</section>
<!-- Button trigger modal -->


@endsection