@extends('admin/mastertemplate')

@section('pg-name')
File
@endsection

@section('title')
File
@endsection

@section('content')


<div class="card col-8 offset-md-2">
    <div class="card-header bg-dark">
   <h3>{{$client_company}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            @foreach($fileview as $view)
            <div class="col-sm-2" style="margin-left:40px;">
                <a href="{{route('downloadfile',$view->documents)}}">
                    <img src="{{asset('storage/uploads/google-docs-icon-png-2.png')}}" class="img-fluid mb-2"
                        alt="white sample" />
                </a>
                <p style="font-size:12px">{{$view->documents}}</p>
            </div>

            @endforeach

        </div>
    </div>

</div>

@endsection