<?php

namespace App\Http\Controllers;

use App\Models\PharmacyInvoice;
use App\Http\Requests\StorePharmacyInvoiceRequest;
use App\Http\Requests\UpdatePharmacyInvoiceRequest;

class PharmacyInvoiceController extends Controller
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
     * @param  \App\Http\Requests\StorePharmacyInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePharmacyInvoiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PharmacyInvoice  $pharmacyInvoice
     * @return \Illuminate\Http\Response
     */
    public function show(PharmacyInvoice $pharmacyInvoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PharmacyInvoice  $pharmacyInvoice
     * @return \Illuminate\Http\Response
     */
    public function edit(PharmacyInvoice $pharmacyInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePharmacyInvoiceRequest  $request
     * @param  \App\Models\PharmacyInvoice  $pharmacyInvoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePharmacyInvoiceRequest $request, PharmacyInvoice $pharmacyInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PharmacyInvoice  $pharmacyInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(PharmacyInvoice $pharmacyInvoice)
    {
        //
    }
}
