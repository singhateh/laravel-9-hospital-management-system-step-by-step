<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Http\Jambasangsang\Traits\updatableAndCreatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use updatableAndCreatable, HasRoles;

    protected $fillable = [
        'title',
        'name',
        'username',
        'email',
        'password',
        'gender',
        'dob',
        'age',
        'religion',
        'address_1',
        'address_2',
        'image',
        'status',
        'created_by_id',
        'updated_by_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // RelationShips for the users model

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by_id', 'id');
    }


    //  Accessors and mutators

    // Name Transformation

    protected function name(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucfirst($value), // This will get the value and transform it to this format
            set: fn ($value) => Str::lower($value) // This will get the value from the request and transform it to this format
        );
    }

    // create_at()

    protected function create_at(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  Carbon::parse($value)->toDateTimeString(),
            set: fn ($value) => date('Y-m-d', strtotime($value))
        );
    }


    // Search functionality

    public static function search($search)
    {

        return empty($search) ? static::query()
            : static::where('id', 'like', '%' . $search . '%')
            ->orWhere('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%');
    }
}
