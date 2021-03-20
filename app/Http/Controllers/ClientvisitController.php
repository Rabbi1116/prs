<?php

namespace App\Http\Controllers;

use App\Models\Clientvisit;
use App\Models\CompanyProduct;
use Illuminate\Http\Request;

class ClientvisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/employe/visit');
    }

    public function addvisit()
    {
        $addview = CompanyProduct::all();
        
        return view('admin/employe/addvisit',['addview'=>$addview]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientvisit  $clientvisit
     * @return \Illuminate\Http\Response
     */
    public function show(Clientvisit $clientvisit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientvisit  $clientvisit
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientvisit $clientvisit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientvisit  $clientvisit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientvisit $clientvisit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientvisit  $clientvisit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientvisit $clientvisit)
    {
        //
    }
}
