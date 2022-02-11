<?php

namespace App\Http\Controllers;

use App\Models\SampleCollection;
use App\Http\Requests\StoreSampleCollectionRequest;
use App\Http\Requests\UpdateSampleCollectionRequest;

class SampleCollectionController extends Controller
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
     * @param  \App\Http\Requests\StoreSampleCollectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSampleCollectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SampleCollection  $sampleCollection
     * @return \Illuminate\Http\Response
     */
    public function show(SampleCollection $sampleCollection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SampleCollection  $sampleCollection
     * @return \Illuminate\Http\Response
     */
    public function edit(SampleCollection $sampleCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSampleCollectionRequest  $request
     * @param  \App\Models\SampleCollection  $sampleCollection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSampleCollectionRequest $request, SampleCollection $sampleCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SampleCollection  $sampleCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy(SampleCollection $sampleCollection)
    {
        //
    }
}
