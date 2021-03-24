@extends('admin/mastertemplate')

@section('pg-name')
Setup
@endsection

@section('title')
Setup
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                    data-target="#modal-default">
                    Add new
                </button>
            </div>
            <div class="row">
                <div class="col-6">
                    <!-- /.card-header -->
                    <div class="card-body" style="padding: 30px;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10%">ON</th>
                                    <th style="width:45%">Designation</th>
                                    <th style="width:5%">Delet</th>


                                </tr>
                            </thead>
                            <tbody>
                            @foreach($designation as $key => $designations)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$designations -> designation_title}}</td>
                                    <td><a href="{{'deletdesignations/'.$designations ->id}}"> <button type="button" class="btn btn-block bg-gradient-danger btn-flat"><i class="fas fa-trash-alt"></i></button></a></td>
                                </tr>
                                @endforeach
                         

                            </tbody>
                        </table>

                    </div>

                    <!-- /.card-body -->
                </div>
                <div class="col-6">
                    <!-- /.card-header -->
                    <div class="card-body" style="padding: 30px;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10%">ON</th>
                                    <th style="width:45%">Department</th>
                                    <th style="width:5%">Delet</th>

                                </tr>
                            </thead>
                            <tbody>

                            @foreach($department as $key => $departments)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$departments ->title}}</td>
                                    <td><a href="{{'deletdepartments/'.$departments ->id}}"> <button type="button" class="btn btn-block bg-gradient-danger btn-flat"><i class="fas fa-trash-alt"></i></button></a></td>
                                </tr>
                                @endforeach
                     

                            </tbody>
                        </table>

                    </div>

                    <!-- /.card-body -->
                </div>
            </div>

        </div>

    </div>
</section>



<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <form action="{{route('addsetup')}}" method="POST">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Setup</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Add New</label>
                        <input type="text" class="form-control" name="setup" id="exampleInputEmail1" placeholder="Add">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category</label>
                        <select class="form-control" name="category" id="">
                            <option selected disabled>Select</option>
                            <option value="designation">Designation</option>
                            <option value="department">Department</option>
                        </select>
                    </div>
                    <hr>


                </div>



                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

        </form>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
@endsection