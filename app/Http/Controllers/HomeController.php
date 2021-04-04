<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/dashboard');
    }
    public function view()
    {
        $view = User::all();

        return view('admin/master/users',['view'=>$view]);
    }
    public function viewstore()
    {
        return view('admin/master/addusers');
    }
    public function store(Request $req)
    {
        $req->validate([
            'name'=>['required'],
            'email'=>['required','Unique:users'],
        ]);

      $user=new User();
      $user->name=$req->name;
      $user->email=$req->email;
      $user->admin_type='General';
      $user->password=Hash::make($req->email);
      $user->save();
      return redirect('User');
    }
    public function delete($id)
    {

     User::find($id)->delete();

      return back();
    }
    public function edit($id)
    {
     $edit = User::find($id);
   
      return view('admin/master/edit',['edit'=>$edit]);
    }
    public function update(Request $request)
    {
     $update = User::find( $request->id);
     $update->name=$request->name;
     $update->email=$request->email;
     $update->password=Hash::make($request->password);
     $update->save();
     return redirect('User');
    }
}
