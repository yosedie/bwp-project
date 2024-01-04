<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'channel_id',
        'user_id',
    ];

    public function Channel(): BelongsTo {
        return $this->belongsTo(Channel::class);
    }

    public function User() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function WatchLaters() : HasMany {
        return $this->hasMany(WatchLater::class);
    }

    public function PlayLists() : HasMany {
        return $this->hasMany(PlayList::class);
    }

    public function Comments() : HasMany {
        return $this->hasMany(Comment::class);
    }

    public function Subscribes() : HasMany {
        return $this->hasMany(Subscribe::class);
    }
}
