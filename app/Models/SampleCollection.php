<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SampleCollection extends Model
{
    use HasFactory;

    protected $fillable  = ['sample_code', 'collect_date',
    'dispatch_date','cancel_dispatch_date','status',
    'investigation_id', 'laboratory_id',
    'approve_by_id' ,'created_by_id', 'updated_by_id'];

}
