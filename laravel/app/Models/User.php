<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $attributes = [
        'role' => 'user'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function Contents(): HasMany
    {
        return $this->hasMany(Content::class);
    }

    public function WatchLaters(): HasMany
    {
        return $this->hasMany(WatchLater::class);
    }

    public function PlayLists(): HasMany
    {
        return $this->hasMany(PlayList::class);
    }

    public function Comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function Suscribes(): HasMany
    {
        return $this->hasMany(Suscribe::class);
    }

    public function ContentVisits(): HasMany {
        return $this->hasMany(ContentVisit::class);
    }
    
    public function getRedirectRoute() : string
    {
        if ($this->role == 'admin') {
            return 'admin';
        } else {
            return 'home';
        }
    }
}
