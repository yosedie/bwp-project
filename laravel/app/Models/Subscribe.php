<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subscribe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'content_id'
    ];

    public function User() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function Content() : BelongsTo {
        return $this->belongsTo(Content::class);
    }
}
