<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['start_time', 'end_time',
    'available_days','note','status','user_id',
    'created_by_id', 'updated_by_id'];
}
