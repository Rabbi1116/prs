@extends('admin/mastertemplate')

@section('pg-name')
Project
@endsection

@section('title')
Project
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">

        <div class="card col-8 offset-md-2">
            <div class="card-header">
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                    data-target="#modal-default">
                    Add New
                </button>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Project</th>
                            <th style="width: 10px">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($showview as $key=>$showviews)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$showviews->project_title}}</td>

                            <td><a href="{{'deleteproject/'.$showviews->id}}"><button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');">Delete</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->

        </div>

    </div>
</section>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Project</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('addProject')}}" method="POST">
                @csrf
                    <div class="card card-primary">

                        <div class="card-body">
                            <div class="form-group">

                                <input type="text" name='project' class="form-control" id="exampleInputEmail1"
                                    placeholder="Add New">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection