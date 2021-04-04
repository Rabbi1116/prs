@extends('admin/mastertemplate')

@section('pg-name')
Users
@endsection

@section('title')
Users
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">


    <div class="card card-body col-8 offset-md-2">
              <div class="card-header ">
                <a href="{{route('adduser')}}"><button class="btn btn-info float-right ">Add New</button></a>
              </div>
              <!-- /.card-header -->
              <div class="">
                <table class="table table-bordered ">
                  <thead>
                    <tr>
                      <th style="width: 10%">#</th>
                      <th style="width: 30%">Name</th>
                      <th style="width: 40%">Email</th>
                      <th style="width: 10%">Edit</th>
                      <th style="width: 10%">Delet</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($view as $key=>$userview)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$userview->name}}</td>
                      <td>{{$userview->email}}</td>
                      <td><a href="{{'edituser/'.$userview->id}}"><button class="btn btn-info">Edit</button></a></td>

                      <td><a href="{{'deleteuser/'.$userview->id}}"><button class="btn btn-danger">Delete</button></a></td>
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