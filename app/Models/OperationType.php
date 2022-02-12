<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationType extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['name','status',
                            'created_by_id', 'updated_by_id'];
}
