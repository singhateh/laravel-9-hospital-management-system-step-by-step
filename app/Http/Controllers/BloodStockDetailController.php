<?php

namespace App\Http\Controllers;

use App\Models\BloodStockDetail;
use App\Http\Requests\StoreBloodStockDetailRequest;
use App\Http\Requests\UpdateBloodStockDetailRequest;

class BloodStockDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreBloodStockDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBloodStockDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BloodStockDetail  $bloodStockDetail
     * @return \Illuminate\Http\Response
     */
    public function show(BloodStockDetail $bloodStockDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BloodStockDetail  $bloodStockDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodStockDetail $bloodStockDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBloodStockDetailRequest  $request
     * @param  \App\Models\BloodStockDetail  $bloodStockDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBloodStockDetailRequest $request, BloodStockDetail $bloodStockDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BloodStockDetail  $bloodStockDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodStockDetail $bloodStockDetail)
    {
        //
    }
}
