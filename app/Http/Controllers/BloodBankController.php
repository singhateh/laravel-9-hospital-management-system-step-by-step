<?php

namespace App\Http\Controllers;

use App\Models\BloodBank;
use App\Http\Requests\StoreBloodBankRequest;
use App\Http\Requests\UpdateBloodBankRequest;

class BloodBankController extends Controller
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
     * @param  \App\Http\Requests\StoreBloodBankRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBloodBankRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function show(BloodBank $bloodBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodBank $bloodBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBloodBankRequest  $request
     * @param  \App\Models\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBloodBankRequest $request, BloodBank $bloodBank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodBank $bloodBank)
    {
        //
    }
}
