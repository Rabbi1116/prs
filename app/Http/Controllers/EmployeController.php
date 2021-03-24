<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\designation;
use App\Models\User;
use App\Models\employe;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designation= designation::all();
        $department= Department::all();
        $employe= DB::table('employes')
        ->join('designations','employes.designation','=','designations.id')
        ->join('departments','employes.department','=','departments.id')
        ->select('employes.*','designations.*','departments.*','employes.id as employeeid')
        ->get();

        // dd($employe->all());
        return view('admin/employe/employe',['designation'=>$designation,'employe'=>$employe,'department'=>$department]);
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
    public function store(Request $req)
    {
        //   dd($req);
          $user= new User();
          $user->name=$req->name;
          $user->type='employe';
          $user->email=$req->email;
          $user->password=Hash::make($req->password);
          $user->save();
          $emp_id=$user->id;
          // dd($emp_id);
          $employe=new employe();
          $employe->name=$req->name;
          $employe->employe_id=$emp_id;
          $employe->mobile=$req->mobile;
          $employe->email=$req->email;
          $employe->or_mobile=$req->or_mobile;
          $employe->designation=$req->designation;
          $employe->department=$req->department;
          $employe->save();
          return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editemploye=employe::find($id);
        $designation=designation::all();
        $department=department::all();
        // dd($id);
        return view('admin/employe/editemployee',['editemploye'=>$editemploye,'designation'=>$designation,'department'=>$department]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    
        // dd($request->id);
        $requestid=$request->id;
        $getid=DB::table('employes')->where('id',$requestid)->pluck('employe_id')->first();
        // dd($getid);

        $user = User::find($getid);
        $user->email=$request->email;
        $user->save();



        $employe=employe::find($request->id);
        $employe->name=$request->name;
        $employe->designation=$request->designation;
        $employe->department=$request->department;
        $employe->email=$request->email;
        $employe->mobile=$request->mobile;
        $employe->or_mobile=$request->or_mobile;
        $employe->save();
       
          return redirect('/viewregister');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //    employe::find($id)->delete();

    //    User::find($id)->delete();
   $geteid= DB::table('employes')->where("id",$id)->pluck('employe_id')->first();
//    dd($geteid);
     DB::table('employes')->where("id",$id)->delete();
     DB::table('users')->where("id",$geteid)->delete();

       return redirect()->back();
    }
}