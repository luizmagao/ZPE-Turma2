<?php

namespace App\Models;

use App\Enums\CategoriesActivedEnums;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'description',
        'actived'
    ];

    protected $casts = [
        'actived' => CategoriesActivedEnums::class,
        'created_at' => 'datetime:d/m/Y \à\s H\h:i\m',
        'updated_at' => 'datetime:d/m/Y \à\s H\h:i\m',
        'deleted_at' => 'datetime:d/m/Y \à\s H\h:i\m',
    ];
}
