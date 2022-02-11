<?php

namespace App\Http\Controllers;

use App\Models\Laborotory;
use App\Http\Requests\StoreLaborotoryRequest;
use App\Http\Requests\UpdateLaborotoryRequest;

class LaborotoryController extends Controller
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
     * @param  \App\Http\Requests\StoreLaborotoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaborotoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laborotory  $laborotory
     * @return \Illuminate\Http\Response
     */
    public function show(Laborotory $laborotory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laborotory  $laborotory
     * @return \Illuminate\Http\Response
     */
    public function edit(Laborotory $laborotory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaborotoryRequest  $request
     * @param  \App\Models\Laborotory  $laborotory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaborotoryRequest $request, Laborotory $laborotory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laborotory  $laborotory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laborotory $laborotory)
    {
        //
    }
}
