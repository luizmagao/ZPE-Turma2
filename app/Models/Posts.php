<?php

namespace App\Models;

use App\Enums\PostsActivedEnums;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'category_id',
        'title',
        'content',
        'font',
        'actived'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    protected $casts = [
        'title' => 'string',
        'content' => 'string',
        'font' => 'string',
        'created_at' => 'datetime:d/m/Y \à\s H\h:i\m',
        'updated_at' => 'datetime:d/m/Y \à\s H\h:i\m',
        'deleted_at' => 'datetime:d/m/Y \à\s H\h:i\m',
    ];

    protected function actived(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => PostsActivedEnums::from($value)->name,
        );
    }
}
