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
                <button type="button" class="btn btn-info float-right" style="background:#5711B2;" data-toggle="modal"
                    data-target="#modal-lg">
                    Add New
                </button>
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
                            <td> <a href="{{'view/'.$showclient->id}}" ><button type="button" class="btn btn-block btn-primary btn-sm">View</button></a></td>
                            <td> <a href="{{'edit/'.$showclient->id}}" ><button type="button" class="btn btn-block btn-primary btn-sm">Edit</button></a></td>
                           

                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>



    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content " style="background:">
                <form action="{{ route('addclient') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title">New Client</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- start code  -->
                        <div class="card card-danger">
                            <div class="card-body ">
                                @csrf
                                <div class="row">
                                    <div class="col-6 ">
                                        <label for="exampleInputEmail1">Client Name</label>
                                        <input type="text" name="clientname" class="form-control"
                                            placeholder="Client Name">
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">Contact Person Name</label>
                                        <input type="text" class="form-control" name="contactpersonname"
                                            placeholder="Contact Person Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">Company Name</label>
                                        <input type="text" class="form-control" name="companyname"
                                            placeholder="Company Name">
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">Contact Person phone</label>
                                        <input type="text" class="form-control" name="contactpersonphone"
                                            placeholder="Contact Person phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">Company Email</label>
                                        <input type="email" class="form-control" name="companyemail"
                                            placeholder="Company Email">
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">Contact Person Email</label>
                                        <input type="text" class="form-control" name="contactpersonemail"
                                            placeholder="Contact Person Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">Company Phone</label>
                                        <input type="text" class="form-control" name="companyphone"
                                            placeholder="Company Phone">
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">Upload File</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="uploadfile"
                                                    id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Office Address</label>
                                            <input type="text" name="Office Address" class="form-control"
                                                placeholder="Enter ...">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>

                        <!-- end code -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" style="background:#5711B2;" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</section>
<!-- Button trigger modal -->


@endsection