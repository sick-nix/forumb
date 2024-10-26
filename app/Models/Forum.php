<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Forum extends Model
{
    /**
     * Get all posts in the forum.
     */
    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the parent forum.
     */
    public function parent(): BelongsTo {
        return $this->belongsTo(Forum::class, 'parent_id');
    }

    /**
     * Get all subforums of this forum.
     */
    public function subforums(): HasMany {
        return $this->hasMany(Forum::class, 'parent_id');
    }
}
