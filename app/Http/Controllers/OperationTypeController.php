<?php

namespace App\Http\Controllers;

use App\Models\OperationType;
use App\Http\Requests\StoreOperationTypeRequest;
use App\Http\Requests\UpdateOperationTypeRequest;

class OperationTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreOperationTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOperationTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OperationType  $operationType
     * @return \Illuminate\Http\Response
     */
    public function show(OperationType $operationType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OperationType  $operationType
     * @return \Illuminate\Http\Response
     */
    public function edit(OperationType $operationType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOperationTypeRequest  $request
     * @param  \App\Models\OperationType  $operationType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOperationTypeRequest $request, OperationType $operationType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OperationType  $operationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(OperationType $operationType)
    {
        //
    }
}
