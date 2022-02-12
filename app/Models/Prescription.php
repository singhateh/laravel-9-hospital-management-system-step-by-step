<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['dosage','frequency','duration',
    'food_relation','route', 'instruction',
    'patient_id','patient_visit_id','user_id','medicine_id',
    'status','created_by_id', 'updated_by_id'];
}
