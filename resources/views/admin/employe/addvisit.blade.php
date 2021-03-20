@extends('admin/mastertemplate')

@section('pg-name')
Add Visit
@endsection

@section('title')
Add Visit
@endsection
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="card" style="background:#fff;">
            <form action="">

                <div class="card-body">
                    <div class="row ">
                        <div class="col-4">
                            <label for="exampleInputEmail1">Client Name</label>
                            <input type="text" class="form-control" placeholder="Client Name">
                        </div>
                        <div class="col-4">
                            <label for="exampleInputEmail1">Company Name</label>
                            <input type="text" class="form-control" placeholder="Company Name">
                        </div>
                        <div class="col-4 ">
                            <label for="exampleInputEmail1">Client designation</label>
                            <input type="text" class="form-control" placeholder="Client designation">
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-4">
                            <label for="exampleInputEmail1">Company Category</label>
                            <select class="form-control" aria-label="Default select example">
                                <option selected>Select</option>
                                @foreach($addview as $view)
                                <option value="{{$view->id}}">{{$view->company_category}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="exampleInputEmail1">Requirement</label>
                            <select class="form-control" aria-label="Default select example">
                                <option selected>Select</option>
                                @foreach($addview as $view)
                                <option value="{{$view->id}}">{{$view->product}}}</option>
                                @endforeach
                               
                            </select>
                        </div>

                        <div class="col-4">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" placeholder="E-Mail">
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-4">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="number" class="form-control" placeholder="Phone">
                        </div>
                        <div class="col-4">
                            <label for="exampleInputEmail1">Office Address</label>
                            <input type="text" class="form-control" placeholder="Office Address">
                        </div>
                        <div class="col-4">
                            <label for="exampleInputEmail1">Meeting In</label>
                            <input type="date" class="form-control" placeholder="dd-mm-yyyy">
                        </div>

                    </div>
                    <br>

                    <div class="row ">
                        <div class="col-4">
                            <label for="exampleInputEmail1">Command</label>
                            <select class="form-control" aria-label="Default select example">

                                <option selected>Select</option>

                                <option value="1">One</option>

                            </select>
                        </div>
                        <div class="col-4">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea style='height:40px;' name="comment" class="form-control"
                                form="usrform"></textarea>
                        </div>
                        <div class="form-group col-4">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>

                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg ">Add</button>
                </div>

            </form>
            <!-- /.card-body -->
        </div>
    </div>
</section>
@endsection