@extends('admin/mastertemplate')

@section('pg-name')
Add Users
@endsection

@section('title')
Add Users
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('add_page_view')}}"> <button class="btn btn-success float-right"> Add New </button></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Client Name</th>
                    <th>Company name</th>
                    <th>Visit By</th>
                    <th>Visit Time</th>
                    <th>Remarks</th>
                    <th>Status</th>
                    <th>File</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($visit as $visits)
                <tr>
                    <td>{{$visits->client_name}}</td>
                    <td>{{$visits->company_name}}</td>
                    <td>{{$visits->create_by}}</td>
                    <td>{{$visits->date_time}}</td>
                    <td>{{$visits->remarks}}</td>
                    <td>{{$visits->status}}</td>
                    <td><a href="{{'/fileview/'.$visits->id}}"><button class="btn btn-success"><i class="fas fa-eye"></i></button></a></td>
                    <td><a href="{{'editvisit/'.$visits->id}}"><button class="btn btn-success"><i class="fas fa-edit"></i></button></a></td>
                    <td><a href="{{route('delete_visit',$visits->id)}}"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>


@endsection