@extends('admin/mastertemplate')

@section('pg-name')
Edit
@endsection

@section('title')
Edit
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="card card-danger col-md-10 offset-md-1 dark-mode">

            <!-- @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif() -->

            <div class="card-body ">
                <form action="{{'/Updateuser/'.$edit->id}}"  method="POST" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleInputEmail1">Name</label>
                        </div>
                        <div class="col-8">
                            <input type="text" value="{{$edit->name}}" name="name" autocomplete="off" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleInputEmail1">Email Address</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="email" value="{{$edit->email}}" autocomplete="off" class="form-control" placeholder="Email Address">
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleInputEmail1">Change password</label>
                        </div>
                        <div class="col-8">
                            <input type="password" name="password"  class="form-control" autocomplete="off" placeholder="Change Password">
                        </div>
                    </div>

                    <hr>
                    
                    <div class="row">

                        <div class="col-8 offset-md-3 ">
                            <button type="submit" class="btn btn-block btn-primary btn-sm ">Update </button>
                        </div>
                    </div>

                </form>
            </div>


        </div>
    </div>

</section>


@endsection