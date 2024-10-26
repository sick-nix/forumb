<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    /**
     * Get the user that created the post.
     */
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the forum that created the post.
     */
    public function forum(): BelongsTo {
        return $this->belongsTo(Forum::class);
    }

    /**
     * Get all comments in the post.
     */
    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }
}
