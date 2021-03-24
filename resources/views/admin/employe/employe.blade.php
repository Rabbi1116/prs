@extends('admin/mastertemplate')

@section('pg-name')
Registeration
@endsection

@section('title')
Registeration
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-default">
                    Add New
                </button>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Employe Name</th>
                            <th>Employe designation</th>
                            <th>Employe departpent</th>
                            <th>Email</th>
                            <th>Employe Mobile</th>
                            <th>Official Phone</th>
                            <th style="width: 10%;">Edit</th>
                            <th style="width: 10%;">Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($employe as $employes)
                        <tr>
                            <td>{{$employes->name}}</td>
                            <td>{{$employes->designation_title}}</td>
                            <td>{{$employes->title}}</td>
                            <td>{{$employes->email}}</td>
                            <td>{{$employes->mobile}}</td>
                            <td>{{$employes->or_mobile}}</td>
                            
                            <td> <a href="{{'editemployee/'.$employes->employeeid}}"><button type="button"
                                        class="btn btn-block btn-primary btn-sm">Edit</button></a></td>
                            <td> <a href="{{'deletemployee/'.$employes->employeeid}}"><button type="button"
                                        class="btn btn-block btn-danger btn-sm">Delete</button></a></td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>






    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('emp-register') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                    <div class="card-header ">
                                <a href="" class="h3"><b>Register a new Employe</b></a>
                            </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- start code  -->
                        <div class="card  card-primary">
                            
                            <div class="card-body">
                                @csrf
                                <div class="input-group mb-3 ">
                                    <input type="text" name="name" class="form-control" placeholder="Full name">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="Number" name="mobile" class="form-control" placeholder="Mobile Number">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="Number" name="or_mobile" class="form-control"
                                        placeholder="Official Mobile Number">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <select class="form-control" name="designation">
                                        <option selected>All Designation</option>
                                        @foreach($designation as $des)
                                        <option value="{{$des->id}}">{{$des->designation_title}}</option>
                                        @endforeach

                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-check-circle"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <select class="form-control" name="department">
                                        <option selected> All Department</option>
                                        @foreach($department as $dep)
                                        <option value="{{$dep->id}}">{{$dep->title}}</option>
                                        @endforeach

                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                        
                                            <span class="fas fa-border-all"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                </div>

                            </div>
                            <!-- /.form-box -->
                        </div>

                        <!-- end code -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" style="background:#5711B2;" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</section>
<!-- Button

@endsection