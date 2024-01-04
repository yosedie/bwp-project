<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Channel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'city',
        'country',
        'gender',
        'content_type',
    ];

    protected $attributes = [
        'suscribe' => 0,
        'followers' => 0,
    ];

    public function Contents() : HasMany {
        return $this->hasMany(Content::class);
    }
}
