<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['name', 'code', 'status',
    'created_by_id', 'updated_by_id'];
}
