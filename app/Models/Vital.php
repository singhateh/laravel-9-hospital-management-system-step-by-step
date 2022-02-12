<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vital extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable = [
        'systolic_B_P', 'diastolic_B_P', 'temperature',
        'weight','height','bmi','respiratory','heart_rate',
        'urine_output','blood_sugar_f','blood_sugar_r',
        'spo_2','avpu','trauma','mobility','oxygen_supplementation',
        'comment','patient_id','patient_visit_id','user_id', // Doctor Id
        'created_by_id','updated_by_id',
    ];
}
