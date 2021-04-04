@extends('admin/mastertemplate')

@section('pg-name')
Edit
@endsection

@section('title')
Edit
@endsection

@section('content')
<div class="card-header bg-info col-8 offset-md-2">
    </div>
<div class="card col-8 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
  

    <div class="card-body ">
        <div class="row">
            <div class="col-3">
                <label for="exampleInputEmail1">Client Company</label>
            </div>
            <div class="col-9">
                <select name="client_company_id" class="form-control select2" style="width: 100%;">
                    <option selected disabled>Select</option>

                    <option value="">{{$visit->remarks}}</option>


                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3">
                <label for="exampleInputEmail1">Visit time</label>
            </div>
            <div class="col-9">
                <input type="datetime-local" name="date_time" class="form-control float-right">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3">
                <label for="exampleInputEmail1">Status</label>
            </div>
            <div class="col-9">
                <select name="status" class="form-control">
                    <option selected disabled>Select</option>

                    <option value=""></option>

                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3">
                <label for="exampleInputEmail1">Remarks</label>
            </div>
            <div class="col-9">
                <textarea class="form-control" name="remarks"  style="height:40px;" rows="3"
                    placeholder="Enter ...">{{$visit->remarks}}</textarea>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-4 offset-md-4">
            <button style="margin-top:7px ;" class="btn btn-primary btn-flat" type="button"
                        data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                        aria-controls="collapseExample">
                        Meeting setting <i class="fas fa-arrow-down"></i>
                    </button>
            </div>
        </div>

        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div class="row">
                    <div class="col-4">
                        <label for="exampleInputEmail1">Meeting Time</label>
                        <div class="input-group">

                            <input type="datetime-local" name="meeting_date_time" class="form-control float-right">

                        </div>
                    </div>

                    <div class="col-4">
                        <label for="exampleInputEmail1">Priority</label>
                        <select name="meeting_priority" class="form-control">
                            <option selected disabled>Select</option>
                        
                            <option value=""></option>
                          
                        </select>
                    </div>

                    <div class="col-4">
                        <label for="exampleInputEmail1">Remarks</label>
                        <textarea class="form-control" name="meeting_note" style="height:40px;" rows="3"
                            placeholder="Enter ..."></textarea>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>




@endsection