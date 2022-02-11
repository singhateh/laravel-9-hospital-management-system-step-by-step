<?php

namespace App\Http\Controllers;

use App\Models\ChequeDetail;
use App\Http\Requests\StoreChequeDetailRequest;
use App\Http\Requests\UpdateChequeDetailRequest;

class ChequeDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreChequeDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChequeDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChequeDetail  $chequeDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ChequeDetail $chequeDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChequeDetail  $chequeDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ChequeDetail $chequeDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChequeDetailRequest  $request
     * @param  \App\Models\ChequeDetail  $chequeDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChequeDetailRequest $request, ChequeDetail $chequeDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChequeDetail  $chequeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChequeDetail $chequeDetail)
    {
        //
    }
}
