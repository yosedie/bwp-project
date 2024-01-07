<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContentVisit extends Model
{
    use HasFactory;

    protected $table = 'content_visits';

    protected $fillable = [
        'user_id',
        'content_id',
    ];

    public function Content() : BelongsTo {
        return $this->belongsTo(Content::class);
    }

    public function User() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
