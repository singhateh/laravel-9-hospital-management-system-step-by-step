<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    use updatableAndCreatable;


    protected $fillable  = ['status',
    'patient_visit_id', 'doctor_order_id',
    'patient_id', 'created_by_id', 'updated_by_id'];
}
