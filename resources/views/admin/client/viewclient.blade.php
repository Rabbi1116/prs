@extends('admin/mastertemplate')

@section('pg-name')
Client
@endsection

@section('title')
Client
@endsection

@section('content')


<div class="card card-primary">
    <div class="card-header" style="background:#5711B2;">

    </div>
    <div class="card-body">

        <div class="row">

            <div class="col-6">
                <strong><i class="fas fa-user-alt"></i>Client Name</strong>

                <p class="text-muted">
                    <b>{{$viewclients->client_name}}</b>
                </p>
            </div>

            <div class="col-6">
                <strong><i class="fas fa-building"></i>Company Name</strong>

                <p class="text-muted">
                    <b>{{$viewclients->company_name}}</b>
                </p>

            </div>

        </div>
        <hr>
        <div class="row">

            <div class="col-6">
                <strong><i class="fas fa-phone-alt"></i>Client Phone</strong>

                <p class="text-muted">
                    <b>{{$viewclients->client_phone}}</b>
                </p>
            </div>


            <div class="col-6">
                <strong><i class="fas fa-envelope"></i>Client Email</strong>

                <p class="text-muted">
                    <b>{{$viewclients->client_email}}</b>
                </p>

            </div>

        </div>
        <hr>
        <div class="row">

            <div class="col-6">
                <strong><i class="fas fa-user-alt"></i>Contact Person</strong>

                <p class="text-muted">
                    <b>{{$viewclients->contact_person}}</b>
                </p>
            </div>


            <div class="col-6">
                <strong><i class="fas fa-phone-alt"></i>Contact Phone</strong>

                <p class="text-muted">
                    <b>{{$viewclients->contact_phone}}</b>
                </p>
            </div>

        </div>
        <hr>
        <div class="row">

            <div class="col-6">
                <strong><i class="fas fa-envelope"></i>Contact Person Email</strong>

                <p class="text-muted">
                    <b>{{$viewclients->contact_email}}</b>
                </p>
            </div>


            <div class="col-6">
                <strong><i class="far fa-address-book"></i>Office Address</strong>

                <p class="text-muted">
                    <b>{{$viewclients->office_address}}</b>
                </p>
            </div>

        </div>
        <hr>
        <div class="row">

            <div class="col-12">
                <div class="col-sm-2">
                    <a href="{{$viewclients->file}}" data-toggle="lightbox" 
                        data-gallery="gallery">
                        <img src="{{$viewclients->file}}" class="img-fluid mb-5" alt="white sample" />
                    </a>
                </div>
            </div>

        </div>
        <hr>


        <!-- /.card-body -->
    </div>

    <div class="card-header" style="background:#5711B2;">

    <a href="{{'/clientdelete/'.$viewclients->id}}"> <button type="button" style="color: #fff;" class="btn btn-block btn-outline-danger btn-lg">Delete</button>
                                        </a>
    </div>
     
</div>



@endsection