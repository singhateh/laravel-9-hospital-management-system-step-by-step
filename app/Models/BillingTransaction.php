<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingTransaction extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['payment_amount', 'payment_amount', 'status',
                'patient_visit_id', 'billing_transaction_id', 'created_by_id', 'updated_by_id'];

}
