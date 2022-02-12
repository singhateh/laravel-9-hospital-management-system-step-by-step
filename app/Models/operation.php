<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operation extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['operation_date','operation_time',
    'amount','description','status','operation_type_id',
    'patient_id','user_id','created_by_id', 'updated_by_id'];
}
