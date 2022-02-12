<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['registration_no','registration_date','referral',
    'referred_by','patient_type', 'title',
    'name','dob', 'age',
    'gender','marital_status', 'blood_group',
    'email','phone', 'religion',
    'occupation','country', 'home_phone',
    'home_address','father_name', 'father_address',
    'father_phone','mother_name', 'mother_address',
    'mother_phone','same_a_patient', 'next_of_kin_phone',
    'next_of_kin_email','next_of_kin_address', 'payment_method',
    'symptoms','image', 'user_id', // As Doctor Id
    'status','created_by_id', 'updated_by_id'];
}
