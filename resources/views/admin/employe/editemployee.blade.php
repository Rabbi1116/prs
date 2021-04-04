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
        <div class="card card-danger col-md-10 offset-md-1">

            <div class="card-body ">
                <form action="{{'/updateemployee/'.$editemploye->id}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-3">
                        <label for="exampleInputEmail1">Employe Name</label>
                    </div>
                    <div class="col-8">
                        <input type="text" name="name" class="form-control" value="{{$editemploye->name}}"
                            placeholder="Employe Name">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <label for="exampleInputEmail1">Employe designation</label>
                    </div>
                    <div class="col-8">
                        <select name="designation" class="form-control" id="">
                            @foreach($designation as $designations)
                            <option {{$designations->id === $editemploye->designation ? "selected" : ""}}
                                value="{{$designations->id}}">{{$designations->designation_title}}</option>
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
                            @foreach($department as $departments)
                            <option {{$departments->id === $editemploye->department ? "selected" : ""}}
                                value="{{$departments->id}}">{{$departments->title}}</option>
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
                        <input type="text" name="email" class="form-control" value="{{$editemploye->email}}"
                            placeholder="Employe Email">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <label for="exampleInputEmail1">Employe Mobile</label>
                    </div>
                    <div class="col-8">
                        <input type="text" name="mobile" class="form-control" value="{{$editemploye->mobile}}"
                            placeholder="Employe Mobile">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <label for="exampleInputEmail1">Official Phone</label>
                    </div>
                    <div class="col-8">
                        <input type="text" name="or_mobile" class="form-control" value="{{$editemploye->or_mobile}}"
                            placeholder="Official Phone">
                    </div>
                </div>
                <hr>
                <div class="row">

                    <div class="col-8 offset-md-3 ">
                        <button type="submit" class="btn btn-block btn-primary btn-sm "
                            style="background:#5711B2;">Update</button>
                    </div>
                </div>

                </form>
            </div>


        </div>
        <!-- /.card-body -->
    </div>
    </div>
</section>
@endsection