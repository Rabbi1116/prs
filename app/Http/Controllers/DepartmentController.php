<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\designation;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department =Department::all(); 
        $designation =designation::all(); 
          return view('admin/setup',['department'=>$department,'designation'=>$designation]);
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
        // dd($request->all());
          

        if($request->category=='department'){
            $addsetup=new Department();
            $addsetup->title=$request->setup;
            $addsetup->save();
            }elseif($request->category=='designation'){
            $addsetup=new designation();
            $addsetup->designation_title=$request->setup;
            $addsetup->save();
            }
            alert()->success('Add Successfull', 'Success')->autoclose("2000");
            return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::find($id)->delete();

       alert()->success('Delete Success', 'Delete')->autoclose("2000");
       return  redirect()->back();
       
        
       
    }
}