@extends('admin/mastertemplate')

@section('pg-name')
Registeration
@endsection

@section('title')
Registeration
@endsection

@section('content')
<div class="col-4 offset-md-4">
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card ">
            <div class="card-header">
               <a href="{{route('viewaddemploye')}}"> <button type="button" class="btn btn-info float-right" >
                    Add New
                </button> </a>
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
                            <td> <a onclick="return confirm('Are you sure you want to delete?');"
                                    href="{{'deletemployee/'.$employes->employeeid}}"><button type="button"
                                        class="btn btn-block btn-danger btn-sm">Delete</button></a></td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>


</section>

@endsection