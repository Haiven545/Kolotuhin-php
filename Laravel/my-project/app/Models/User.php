<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    /**
     * Связь "один ко многим" с постами
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Связь "один ко многим" с комментариями
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}