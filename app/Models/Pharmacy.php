<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Jambasangsang\Traits\updatableAndCreatable;

class Pharmacy extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['code','name','email',
    'phone','address', 'branch_id',
    'status','created_by_id', 'updated_by_id'];



    public function branch(): HasMany
    {
        return $this->hasMany(Branch::class, 'branch_id', 'id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by_id', 'id');
    }
}
