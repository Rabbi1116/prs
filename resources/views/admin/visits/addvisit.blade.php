@extends('admin/mastertemplate')

@section('pg-name')
Add Visit
@endsection

@section('title')
Add New
@endsection

@section('content')


<div class="card card-danger col-10 offset-md-1">
@if($errors->any())
<div class="alert alert-danger">
 <ul>
 @foreach($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
 </ul>
</div>
@endif
    <div class="card-header bg-light">


    </div>
    <form action="{{route('addvisit')}}" method="POST" enctype="multipart/form-data">
        @csrf

       

        <div class="card-body">
            <div class="row">

                <div class="col-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Client</label>
                        <select name="client_company_id" class="form-control select2" style="width: 100%;">
                            <option selected disabled>Select</option>
                            @foreach($client as $client);
                            <option value="{{$client->id}}">{{$client->company_name}}</option>
                            @endforeach


                        </select>
                    </div>
                </div>

                <div class="col-1">
                    </br>
                    <button class="btn btn-info" type="button" data-toggle="modal" data-target="#modal-lg"
                        style="padding: 7px 10px 5px 8px; margin: 7px 60px 0px -20px; "><i
                            class="fas fa-plus"></i></button>
                </div>

                <div class="col-4">
                    <label for="exampleInputEmail1">Visit time</label>
                    <div class="input-group">

                        <input type="datetime-local" name="date_time" class="form-control float-right">

                    </div>
                </div>

                <div class="col-3">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" class="form-control">
                        <option selected disabled>Select</option>
                        @foreach($status as $status)
                        <option value="{{$status->title}}">{{$status->title}}</option>
                        @endforeach
                    </select>
                </div>



            </div>

            <hr>
            <div class="row">

            <div class="col-3">
                    <label for="exampleInputEmail1">Document</label>
                    <span class="btn btn-success btn-xl col fileinput-button" >
                        <i class="fas fa-plus"></i>
                        <span >Add files</span>
                        <input style=" position:absolute;left:3%" type="file" class="custom-file-input " value="Hello World" multiple name="documents[]" id="exampleInputFile">
                      </span>
                </div>
                <div class="col-4">
                    <label for="exampleInputEmail1">Remarks</label>
                    <textarea class="form-control" name="remarks" style="height:40px;" rows="3"
                        placeholder="Enter ..."></textarea>
                </div>


                <div class="col-4">
                    </br>
                    <button style="margin-top:7px ;" class="btn btn-primary btn-flat" type="button"
                        data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                        aria-controls="collapseExample">
                        Meeting setting <i class="fas fa-arrow-down"></i>
                    </button>
                </div>


            </div>
            
            
        </div>


        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div class="row">
                    <div class="col-4">
                        <label for="exampleInputEmail1">Meeting Time</label>
                        <div class="input-group">

                            <input type="datetime-local" name="meeting_date_time" class="form-control float-right">

                        </div>
                    </div>

                    <div class="col-4">
                        <label for="exampleInputEmail1">Priority</label>
                        <select name="meeting_priority" class="form-control">
                            <option selected disabled>Select</option>
                            @foreach($priority as $priority)
                            <option value="{{$priority->prioritie}}">{{$priority->prioritie}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-4">
                        <label for="exampleInputEmail1">Remarks</label>
                        <textarea class="form-control" name="meeting_note" style="height:40px;" rows="3"
                            placeholder="Enter ..."></textarea>
                    </div>


                </div>
            </div>
        </div>

        <div class="card-header">
            <button class="btn btn-primary float-right" type="submit">Add New</button>
        </div>
    </form>

</div>




<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('addvisitclient') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-danger">

                        <div class="card-body ">
                            @csrf
                            <div class="row">
                                <div class="col-6 ">
                                    <label for="exampleInputEmail1">Client Name</label>
                                    <input type="text" name="clientname" class="form-control" placeholder="Client Name">
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
                                    <input type="text" class="form-control" name="company_name"
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
                                    <input type="email" class="form-control" name="client_email"
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

                    </div>
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