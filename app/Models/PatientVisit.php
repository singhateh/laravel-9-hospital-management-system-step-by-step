<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientVisit extends Model
{
    use HasFactory;
    use updatableAndCreatable;
    
    protected $fillable  = ['visit_no','visit_type','visit_date',
    'description','patient_id', 'user_id',
    'visit_status','created_by_id', 'updated_by_id'];
}
