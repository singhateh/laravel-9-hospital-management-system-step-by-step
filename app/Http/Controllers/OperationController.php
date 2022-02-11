<?php

namespace App\Http\Controllers;

use App\Models\operation;
use App\Http\Requests\StoreoperationRequest;
use App\Http\Requests\UpdateoperationRequest;

class OperationController extends Controller
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
     * @param  \App\Http\Requests\StoreoperationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreoperationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function show(operation $operation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function edit(operation $operation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateoperationRequest  $request
     * @param  \App\Models\operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateoperationRequest $request, operation $operation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function destroy(operation $operation)
    {
        //
    }
}
