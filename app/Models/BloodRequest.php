<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = [
        'reason', 'unit', 'blood_type',
        'status', 'patient_id', 'created_by_id', 'updated_by_id'
    ];
}
