<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Jambasangsang\Traits\updatableAndCreatable;

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



    public function doctor(): BelongsTo  // User refer to a doctor in this point
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by_id', 'id');
    }
}
