<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\Meeting;
use App\Models\Status;
use App\Models\Document;
use App\Models\Priority;
use App\Models\client;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $visit = DB::table('visits')
            ->join('clients', 'visits.client_company_id', '=', 'clients.id')
            ->select('clients.*', 'visits.*', 'visits.status as status')
            ->get();
        // dd($visit);

        return  view('admin/visits/visits', ['visit' => $visit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $status = Status::all();
        $priority = Priority::all();
        $client = client::all();
        return view('admin/visits/addvisit', ['status' => $status, 'client' => $client, 'priority' => $priority]);
    }

    public function client(Request $request)
    {
        $addclient = new Client();
        $addclient->client_name = $request->clientname;
        $addclient->company_name = $request->company_name;
        $addclient->client_phone = $request->companyphone;
        $addclient->client_email = $request->client_email;
        $addclient->contact_person = $request->contactpersonname;
        $addclient->contact_phone = $request->contactpersonphone;
        $addclient->contact_email = $request->contactpersonemail;
        $addclient->office_address = $request->Office_Address;

        if ($request->uploadfile) :
            $fileName = time() . '_' . $request->file('uploadfile')->getClientOriginalName();
            $filePath = $request->file('uploadfile')->storeAs('uploads', $fileName, 'public');
            $addclient->file = '/storage/' . $filePath;
        else :
            $addclient->file = '';
        endif;

        $addclient->save();

        return redirect('Add-visit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        // $request->validate([
        //     'documents' => ['required','mimes:jpeg,rar,docx,zip','max:2048'],
        //     ]);

        $createby = Auth()->user()->name;
        // dd( $request->doc);
        $visit = new Visit();
        $visit->create_by = $createby;
        $visit->client_company_id = $request->client_company_id;
        $visit->remarks = $request->remarks;
        $visit->status = $request->status;
        $visit->date_time =  $request->date_time;



        $visit->save();
        $visit_id = $visit->id;



        if ($request->hasfile('documents')) {
            foreach ($request->file('documents') as $key => $document) {
                $name = $document->getClientOriginalName();
                $document->move(public_path() . '/uploads/gallery/', $name);
                $imgData[] = $name;
                $fileModal = new Document();
                $fileModal->doc_table_id = $visit_id;
                $fileModal->documents    = $imgData[$key];
                $fileModal->type ='1';
                $fileModal->save();
            }
        }
        if (!empty($request->meeting_date_time) || !empty($request->meeting_priority) || !empty($request->meeting_note)) {
            $meeting = new Meeting();
            $meeting->visit_id = $visit_id;
            $meeting->meeting_date_time = $request->meeting_date_time;
            $meeting->meeting_priority = $request->meeting_priority;
            $meeting->meeting_note = $request->meeting_note;
            $meeting->save();
        }
        return redirect('Visit-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show(Visit $visit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function edit($visitedit_id)
    {
       
       $visit=DB::table('visits')
       ->join('clients','visits.client_company_id','=','clients.id')
       ->get();
    dd($visit);
       return view('admin/visits/edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visit $visit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy($delete_id)
    {
        // dd($delete_id);
        $unlink_file=DB::table('documents')->where('doc_table_id',$delete_id)->pluck('documents');
      
        Visit::find($delete_id)->delete();
        DB::table('documents')->where('doc_table_id',$delete_id)->delete();


       foreach($unlink_file as $delete_folder){
           if('uploads/gallery/'.$delete_folder){
               if(file_exists('uploads/gallery/'.$delete_folder)){
                  unlink('uploads/gallery/'.$delete_folder);
           }
        }
       }
        //   dd($document);
           


        return back();
    }
}