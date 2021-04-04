@extends('admin/mastertemplate')

@section('pg-name')
Add Users
@endsection

@section('title')
Add Users
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="card card-danger col-md-10 offset-md-1 dark-mode">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif()
            <div class="card-body ">
                <form action="{{route('create_user')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleInputEmail1">Name</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-3">
                            <label for="exampleInputEmail1">Email Address</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-3">
                            <label for="exampleInputEmail1">Password</label>
                        </div>
                        <div class="col-8">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>

                    <hr>

                    <div class="row">

                        <div class="col-8 offset-md-3 ">
                            <button type="submit" class="btn btn-block btn-primary btn-sm ">Create </button>
                        </div>
                    </div>

                </form>
            </div>


        </div>
    </div>

</section>

@endsection