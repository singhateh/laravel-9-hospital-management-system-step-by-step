<?php

namespace App\Http\Controllers;

use App\Models\BillingTransaction;
use App\Http\Requests\StoreBillingTransactionRequest;
use App\Http\Requests\UpdateBillingTransactionRequest;

class BillingTransactionController extends Controller
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
     * @param  \App\Http\Requests\StoreBillingTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBillingTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BillingTransaction  $billingTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(BillingTransaction $billingTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BillingTransaction  $billingTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(BillingTransaction $billingTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBillingTransactionRequest  $request
     * @param  \App\Models\BillingTransaction  $billingTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillingTransactionRequest $request, BillingTransaction $billingTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BillingTransaction  $billingTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillingTransaction $billingTransaction)
    {
        //
    }
}
