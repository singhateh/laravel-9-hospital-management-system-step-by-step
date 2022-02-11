<?php

namespace App\Http\Controllers;

use App\Models\DoctorOrder;
use App\Http\Requests\StoreDoctorOrderRequest;
use App\Http\Requests\UpdateDoctorOrderRequest;

class DoctorOrderController extends Controller
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
     * @param  \App\Http\Requests\StoreDoctorOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DoctorOrder  $doctorOrder
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorOrder $doctorOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DoctorOrder  $doctorOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorOrder $doctorOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorOrderRequest  $request
     * @param  \App\Models\DoctorOrder  $doctorOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorOrderRequest $request, DoctorOrder $doctorOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoctorOrder  $doctorOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorOrder $doctorOrder)
    {
        //
    }
}
