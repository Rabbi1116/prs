@extends('admin/mastertemplate')

@section('pg-name')
Edit Client Details
@endsection

@section('title')
Edit Client Details
@endsection

@section('content')

<div class="card card-primary">
    <div class="card-header" style="background:#5711B2;">

    </div>
    <div class="card-body">
        <form action="{{'/update/'.$editclients->id}}" method="POST">
            @csrf
            <div class="row">

                <div class="col-6">
                    <div class="row">
                        <div class="col-3">

                            <strong><i class="fas fa-user-alt"></i>Client Name</strong>

                        </div>
                        <div class="col-8">

                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$editclients->client_name}}" name="clientname" id="exampleInputEmail1"
                                    placeholder="Client Name">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="row">
                        <div class="col-3">

                            <strong><i class="fas fa-building"></i>Company Name</strong>

                        </div>
                        <div class="col-8">

                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$editclients->company_name}}" name="companyname" id="exampleInputEmail1"
                                    placeholder="Company Name">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="row">

                <div class="col-6">
                    <div class="row">
                        <div class="col-3">

                            <strong><i class="fas fa-phone-alt"></i>Client Phone</strong>

                        </div>
                        <div class="col-8">

                            <div class="form-group">
                                <input type="tel" class="form-control" value="{{$editclients->client_phone}}" 
                                    name="companyphone"  placeholder="Client Phone">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="row">
                        <div class="col-3">

                            <strong><i class="fas fa-envelope"></i>Client Email</strong>

                        </div>
                        <div class="col-8">

                            <div class="form-group">
                                <input type="email" class="form-control" value="{{$editclients->client_email}}" name="companyemail" id="exampleInputEmail1"
                                    placeholder="Client Email">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="row">

                <div class="col-6">
                    <div class="row">
                        <div class="col-3">

                            <strong><i class="fas fa-user-alt"></i>Contact Person</strong>

                        </div>
                        <div class="col-8">

                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$editclients->contact_person}}" name="contactpersonname" id="exampleInputEmail1"
                                    placeholder="Contact Person">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="row">
                        <div class="col-3">

                            <strong><i class="fas fa-phone-alt"></i>Contact Phone</strong>

                        </div>
                        <div class="col-8">

                            <div class="form-group">
                                <input type="tel" class="form-control" value="{{$editclients->contact_phone}}" name="contactpersonphone" id="exampleInputEmail1"
                                    placeholder="Contact Phone">
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <hr>
            <div class="row">

                <div class="col-6">
                    <div class="row">
                        <div class="col-3">

                            <strong><i class="fas fa-envelope"></i>Contact Person Email</strong>

                        </div>
                        <div class="col-8">

                            <div class="form-group">
                                <input type="email" class="form-control" value="{{$editclients->contact_email}}" name="contactpersonemail"
                                    id="exampleInputEmail1" placeholder="Contact Person Email">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="row">
                        <div class="col-3">

                            <strong><i class="far fa-address-book"></i>Office Address</strong>

                        </div>
                        <div class="col-8">

                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$editclients->office_address}}" name="Office_Address" id="exampleInputEmail1"
                                    placeholder="Office Address">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="card card-primary">

            <button type="submit"  class="btn btn-block  btn-flat" style="background:#5711B2; color:#fff">Update</button>

            </div>
        </form>
        <!-- /.card-body -->
    </div>
</div>



@endsection