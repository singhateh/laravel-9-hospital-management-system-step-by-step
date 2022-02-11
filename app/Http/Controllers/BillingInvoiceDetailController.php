<?php

namespace App\Http\Controllers;

use App\Models\BillingInvoiceDetail;
use App\Http\Requests\StoreBillingInvoiceDetailRequest;
use App\Http\Requests\UpdateBillingInvoiceDetailRequest;

class BillingInvoiceDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreBillingInvoiceDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBillingInvoiceDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BillingInvoiceDetail  $billingInvoiceDetail
     * @return \Illuminate\Http\Response
     */
    public function show(BillingInvoiceDetail $billingInvoiceDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BillingInvoiceDetail  $billingInvoiceDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(BillingInvoiceDetail $billingInvoiceDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBillingInvoiceDetailRequest  $request
     * @param  \App\Models\BillingInvoiceDetail  $billingInvoiceDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillingInvoiceDetailRequest $request, BillingInvoiceDetail $billingInvoiceDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BillingInvoiceDetail  $billingInvoiceDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillingInvoiceDetail $billingInvoiceDetail)
    {
        //
    }
}
