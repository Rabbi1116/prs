<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Priority;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status= Status::all();
        $priority= Priority::all();
      return view('admin/client/status',['status'=>$status,'priority'=>$priority]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    dd($request->all());
    if($request->category=='status'){
        // dd('Hello');
    $status=new Status();
    $status->title=$request->status;
    $status->save();
    }elseif($request->category=='priority'){
        // dd('No');
     $status=new Priority();
    $status->prioritie=$request->status;
     $status->save();
    }
    alert()->success('Add Successfull', 'Success')->autoclose("2000");
    return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Status::find($id)->delete();
        alert()->success('Delete Success', 'Delete')->autoclose("2000");
        return  redirect()->back();
    }
}