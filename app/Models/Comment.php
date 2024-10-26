<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    /**
     * Get the user that created the comment.
     */
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the post that this comment belongs to.
     */
    public function post(): BelongsTo {
        return $this->belongsTo(Post::class);
    }
}
