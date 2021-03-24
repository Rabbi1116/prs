<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientview=Client::all();
        
        return view('admin/client/clientlist',['showclients'=>$clientview]);
    }

    public function view($id)
    {
        $viewclients=Client::find($id);
        
        return view('admin/client/viewclient',['viewclients'=>$viewclients]);
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

        $addclient=new Client();
        $addclient->client_name=$request->clientname;
        $addclient->company_name=$request->companyname;
        $addclient->client_phone=$request->companyphone;
        $addclient->client_email=$request->companyemail;
        $addclient->contact_person=$request->contactpersonname;
        $addclient->contact_phone=$request->contactpersonphone;
        $addclient->contact_email=$request->contactpersonemail;
        $addclient->office_address=$request->Office_Address;
        
        if ($request->uploadfile):
            $fileName = time() . '_' . $request->file('uploadfile')->getClientOriginalName();
            $filePath = $request->file('uploadfile')->storeAs('uploads', $fileName, 'public');
            $addclient->file = '/storage/' . $filePath;
        else:
            $addclient->file = '';
        endif;

        $addclient->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editclients=Client::find($id);
        
        return view('admin/client/editclient',['editclients'=>$editclients]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        // dd($request->id);
        $updateclient=Client::find($request->id);
        $updateclient->client_name=$request->clientname;
        $updateclient->company_name=$request->companyname;
        $updateclient->client_phone=$request->companyphone;
        $updateclient->client_email=$request->companyemail;
        $updateclient->contact_person=$request->contactpersonname;
        $updateclient->contact_phone=$request->contactpersonphone;
        $updateclient->contact_email=$request->contactpersonemail;
        $updateclient->office_address=$request->Office_Address;
        $updateclient->save();
        return redirect('Client-list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
       Client::find($id)->delete();
       return redirect('Client-list');

    }
}
