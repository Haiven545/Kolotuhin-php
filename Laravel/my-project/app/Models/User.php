<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    // Связь: у пользователя много постов
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    // Связь: у пользователя много комментариев
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
