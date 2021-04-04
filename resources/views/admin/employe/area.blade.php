@extends('admin/mastertemplate')

@section('pg-name')
Area
@endsection

@section('title')
Area
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">


        <div class="card  col-8 offset-md-2">
            <div class="card-header">
                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-default">
                    Add New
                </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body col-12">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th style="width: 10%">#</th>
                            <th style="width: 30%">Name</th>
                            <th style="width: 10%">Delet</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($area as $key=>$areaview)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$areaview->area}}</td>
                            <td><a onclick="return confirm('Are you sure you want to delete?');"
                                    href="{{'/areadelete/'.$areaview->id}}"><button
                                        class="btn btn-danger">Delete</button></a></td>
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
        <form action="{{route('addarea')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Add Area</label>
                        <input type="text" name="area" class="form-control" id="exampleInputEmail1" placeholder="Area">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection