<?php

namespace App\Http\Controllers;

use App\Models\PatientVisit;
use App\Http\Requests\StorePatientVisitRequest;
use App\Http\Requests\UpdatePatientVisitRequest;

class PatientVisitController extends Controller
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
     * @param  \App\Http\Requests\StorePatientVisitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientVisitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientVisit  $patientVisit
     * @return \Illuminate\Http\Response
     */
    public function show(PatientVisit $patientVisit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientVisit  $patientVisit
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientVisit $patientVisit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientVisitRequest  $request
     * @param  \App\Models\PatientVisit  $patientVisit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientVisitRequest $request, PatientVisit $patientVisit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientVisit  $patientVisit
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientVisit $patientVisit)
    {
        //
    }
}
