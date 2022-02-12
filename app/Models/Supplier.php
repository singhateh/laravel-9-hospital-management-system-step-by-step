<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['name', 'email', 'phone','address',
    'company','product','description','status',
    'created_by_id', 'updated_by_id'];
}
