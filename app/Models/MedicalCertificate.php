<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalCertificate extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['content','finalized',
    'status','patient_id', 'patient_visit_id', 'user_id',
    'created_by_id', 'updated_by_id'];
}
