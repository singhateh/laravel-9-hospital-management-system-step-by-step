<?php

namespace App\Http\Controllers;

use App\Models\MedicalCertificate;
use App\Http\Requests\StoreMedicalCertificateRequest;
use App\Http\Requests\UpdateMedicalCertificateRequest;

class MedicalCertificateController extends Controller
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
     * @param  \App\Http\Requests\StoreMedicalCertificateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicalCertificateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicalCertificate  $medicalCertificate
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalCertificate $medicalCertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicalCertificate  $medicalCertificate
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalCertificate $medicalCertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicalCertificateRequest  $request
     * @param  \App\Models\MedicalCertificate  $medicalCertificate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicalCertificateRequest $request, MedicalCertificate $medicalCertificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicalCertificate  $medicalCertificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalCertificate $medicalCertificate)
    {
        //
    }
}
