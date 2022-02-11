<?php

namespace App\Http\Controllers;

use App\Models\Advice;
use App\Http\Requests\StoreAdviceRequest;
use App\Http\Requests\UpdateAdviceRequest;

class AdviceController extends Controller
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
     * @param  \App\Http\Requests\StoreAdviceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdviceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advice  $advice
     * @return \Illuminate\Http\Response
     */
    public function show(Advice $advice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advice  $advice
     * @return \Illuminate\Http\Response
     */
    public function edit(Advice $advice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdviceRequest  $request
     * @param  \App\Models\Advice  $advice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdviceRequest $request, Advice $advice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advice  $advice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advice $advice)
    {
        //
    }
}
