<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    use updatableAndCreatable;


    protected $fillable  = ['code', 'name',
    'type','medicine_generic_name', 'medicine_unit',
    'medicine_strength','medicine_shelf', 'quantity',
    'quantity_type','price', 'expiration_date','note','image',
    'medicine_category_id','supplier_id','medicine_type_id',
    'status','created_by_id', 'updated_by_id',
];

}
