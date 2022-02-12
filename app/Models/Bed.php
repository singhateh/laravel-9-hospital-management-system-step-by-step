<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['bed_no', 'name',
    'price','image',
    'room_id','bed_type_id', 'image',
    'status','created_by_id', 'updated_by_id',
];
}
