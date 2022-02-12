<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['stat','ot_required','result','status',
    'test_type_id','patient_id', 'patient_visit_id','user_id',
    'created_by_id', 'updated_by_id'];
}
