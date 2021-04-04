<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($file_id)
    {
        $client_id=DB::table('visits')->where('id',$file_id)->pluck('client_company_id')->first();

        $client_company=DB::table('clients')->where('id',$client_id)->pluck('company_name')->first();
         
        // dd($client_company);
        $fileview=DB::table('documents')->where('doc_table_id',$file_id)->get();
        // dd($fileview);
        return view('admin/visits/fileview',['fileview'=>$fileview,'client_company'=>$client_company]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function download($download_id)
    {
        // dd($download_id);
        return response()->download('uploads/gallery/'.$download_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
       
    }
}
