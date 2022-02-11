<?php

namespace App\Http\Controllers;

use App\Models\BillingInvoice;
use App\Http\Requests\StoreBillingInvoiceRequest;
use App\Http\Requests\UpdateBillingInvoiceRequest;

class BillingInvoiceController extends Controller
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
     * @param  \App\Http\Requests\StoreBillingInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBillingInvoiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BillingInvoice  $billingInvoice
     * @return \Illuminate\Http\Response
     */
    public function show(BillingInvoice $billingInvoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BillingInvoice  $billingInvoice
     * @return \Illuminate\Http\Response
     */
    public function edit(BillingInvoice $billingInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBillingInvoiceRequest  $request
     * @param  \App\Models\BillingInvoice  $billingInvoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillingInvoiceRequest $request, BillingInvoice $billingInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BillingInvoice  $billingInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillingInvoice $billingInvoice)
    {
        //
    }
}
