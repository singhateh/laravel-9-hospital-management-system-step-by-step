<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChequeDetail extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['number','date', 'billing_transaction_id', 'created_by_id', 'updated_by_id'];

}
