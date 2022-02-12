<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingInvoice extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['invoice_number', 'total', 'pending_amount',
    'payment_amount', 'mood', 'discount_type',
    'discount_amount', 'discount_note', 'note',
    'tax', 'additional_fee', 'status',
    'patient_visit_id', 'doctor_order_id',
    'patient_id', 'created_by_id', 'updated_by_id'];
}
