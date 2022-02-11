<?php

namespace App\Http\Controllers;

use App\Models\BloodDonor;
use App\Http\Requests\StoreBloodDonorRequest;
use App\Http\Requests\UpdateBloodDonorRequest;

class BloodDonorController extends Controller
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
     * @param  \App\Http\Requests\StoreBloodDonorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBloodDonorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BloodDonor  $bloodDonor
     * @return \Illuminate\Http\Response
     */
    public function show(BloodDonor $bloodDonor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BloodDonor  $bloodDonor
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodDonor $bloodDonor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBloodDonorRequest  $request
     * @param  \App\Models\BloodDonor  $bloodDonor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBloodDonorRequest $request, BloodDonor $bloodDonor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BloodDonor  $bloodDonor
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodDonor $bloodDonor)
    {
        //
    }
}
