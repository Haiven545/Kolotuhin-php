<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    // Связь: комментарий принадлежит пользователю
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Связь: комментарий принадлежит посту
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
