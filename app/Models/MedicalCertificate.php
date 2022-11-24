<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Jambasangsang\Traits\updatableAndCreatable;

class MedicalCertificate extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable  = ['content','finalized',
    'status','patient_id', 'patient_visit_id', 'user_id',
    'created_by_id', 'updated_by_id'];


    public function test_type(): HasMany
    {
        return $this->hasMany(TestType::class, 'test_type_id', 'id');
    }

    public function patient_visit(): HasMany
    {
        return $this->hasMany(PatientVisit::class, 'patient_visit_id', 'id');
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
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
