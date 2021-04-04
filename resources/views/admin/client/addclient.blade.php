@extends('admin/mastertemplate')

@section('pg-name')
Client List
@endsection

@section('title')
Client List
@endsection
@section('content')

<div class="col-8 offset-md-2">
@if($errors->any())
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
<div class="card card-danger">
    <form action="{{ route('addclient') }}" method="POST" enctype="multipart/form-data">
        <div class="card-body ">
            @csrf
            <div class="row">
                <div class="col-6 ">
                    <label for="exampleInputEmail1">Client Name</label>
                    <input type="text" name="clientname" class="form-control" placeholder="Client Name">
                </div>
                <div class="col-6">
                    <label for="exampleInputEmail1">Contact Person Name</label>
                    <input type="text" class="form-control" name="contactpersonname" placeholder="Contact Person Name">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control" name="company_name" placeholder="Company Name">
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
                    <input type="email" class="form-control" name="client_email" placeholder="Company Email">
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
                    <input type="text" class="form-control" name="companyphone" placeholder="Company Phone">
                </div>
                <div class="col-6">
                    <label for="exampleInputEmail1">Upload File</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="uploadfile" id="exampleInputFile">
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
                        <input type="text" name="Office Address" class="form-control" placeholder="Enter ...">
                    </div>
                </div>

            </div>
            <div class="modal-footer ">
                       
                        <button type="submit" style="background:#5711B2;" class="btn btn-primary">Save changes</button>
                    </div>
        </div>
    </form>
</div>
</div>


@endsection
