<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresentingComplain extends Model
{
    use HasFactory;
    use updatableAndCreatable;


    protected $fillable  = ['presenting_complain_type',
    'patient_id','patient_visit_id','user_id',
    'status','created_by_id', 'updated_by_id'];
}
