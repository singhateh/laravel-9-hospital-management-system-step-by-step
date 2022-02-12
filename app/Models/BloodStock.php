<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodStock extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['blood_stock_id', 'created_by_id', 'updated_by_id'];

}
