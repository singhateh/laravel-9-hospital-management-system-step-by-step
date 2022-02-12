<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['room_no', 'name',
    'price','capacity', 'image',
    'ward_id','room_type_id', 'image',
    'status','created_by_id', 'updated_by_id',
];
}
