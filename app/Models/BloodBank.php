<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['blood_type','status', 'patient_id', 'user_id', 'created_by_id', 'updated_by_id'];


}
