@extends('admin/mastertemplate')

@section('pg-name')
Add New
@endsection

@section('title')
Employe
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
                <form action="{{ route('emp-register') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleInputEmail1">Employe Name</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleInputEmail1">Employe designation</label>
                        </div>
                        <div class="col-8">
                            <select name="designation" class="form-control" id="">
                                <option selected>All Designation</option>
                                @foreach($designation as $des)
                                <option value="{{$des->id}}">{{$des->designation_title}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleInputEmail1">Employe department</label>
                        </div>
                        <div class="col-8">
                            <select name="department" class="form-control" id="">
                                <option selected> All Department</option>
                                @foreach($department as $dep)
                                <option value="{{$dep->id}}">{{$dep->title}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleInputEmail1">Employe Email</label>
                        </div>
                        <div class="col-8">
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleInputEmail1">Employe Mobile</label>
                        </div>
                        <div class="col-8">
                            <input type="Number" name="mobile" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleInputEmail1">Official Phone</label>
                        </div>
                        <div class="col-8">
                            <input type="Number" name="or_mobile" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="row">

                        <div class="col-8 offset-md-3 ">
                            <button type="submit" class="btn btn-block btn-primary btn-sm ">Add New</button>
                        </div>
                    </div>

                </form>
            </div>


        </div>
    </div>

</section>

@endsection