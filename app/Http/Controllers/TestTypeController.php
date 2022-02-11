<?php

namespace App\Http\Controllers;

use App\Models\TestType;
use App\Http\Requests\StoreTestTypeRequest;
use App\Http\Requests\UpdateTestTypeRequest;

class TestTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreTestTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestType  $testType
     * @return \Illuminate\Http\Response
     */
    public function show(TestType $testType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestType  $testType
     * @return \Illuminate\Http\Response
     */
    public function edit(TestType $testType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestTypeRequest  $request
     * @param  \App\Models\TestType  $testType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestTypeRequest $request, TestType $testType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestType  $testType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestType $testType)
    {
        //
    }
}
