<?php

namespace App\Http\Controllers;

use App\Models\BloodStock;
use App\Http\Requests\StoreBloodStockRequest;
use App\Http\Requests\UpdateBloodStockRequest;

class BloodStockController extends Controller
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
     * @param  \App\Http\Requests\StoreBloodStockRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBloodStockRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BloodStock  $bloodStock
     * @return \Illuminate\Http\Response
     */
    public function show(BloodStock $bloodStock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BloodStock  $bloodStock
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodStock $bloodStock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBloodStockRequest  $request
     * @param  \App\Models\BloodStock  $bloodStock
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBloodStockRequest $request, BloodStock $bloodStock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BloodStock  $bloodStock
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodStock $bloodStock)
    {
        //
    }
}
