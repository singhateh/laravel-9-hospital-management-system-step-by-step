<?php

namespace App\Http\Controllers;

use App\Models\HospitalSettings;
use App\Http\Requests\StoreHospitalSettingsRequest;
use App\Http\Requests\UpdateHospitalSettingsRequest;

class HospitalSettingsController extends Controller
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
     * @param  \App\Http\Requests\StoreHospitalSettingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHospitalSettingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HospitalSettings  $hospitalSettings
     * @return \Illuminate\Http\Response
     */
    public function show(HospitalSettings $hospitalSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HospitalSettings  $hospitalSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(HospitalSettings $hospitalSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHospitalSettingsRequest  $request
     * @param  \App\Models\HospitalSettings  $hospitalSettings
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHospitalSettingsRequest $request, HospitalSettings $hospitalSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HospitalSettings  $hospitalSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(HospitalSettings $hospitalSettings)
    {
        //
    }
}
