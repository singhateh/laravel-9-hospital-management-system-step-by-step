<?php

namespace App\Http\Controllers;

use App\Models\BedType;
use App\Http\Requests\StoreBedTypeRequest;
use App\Http\Requests\UpdateBedTypeRequest;

class BedTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreBedTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBedTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BedType  $bedType
     * @return \Illuminate\Http\Response
     */
    public function show(BedType $bedType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BedType  $bedType
     * @return \Illuminate\Http\Response
     */
    public function edit(BedType $bedType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBedTypeRequest  $request
     * @param  \App\Models\BedType  $bedType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBedTypeRequest $request, BedType $bedType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BedType  $bedType
     * @return \Illuminate\Http\Response
     */
    public function destroy(BedType $bedType)
    {
        //
    }
}
