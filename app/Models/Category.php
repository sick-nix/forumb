<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /**
     * Get all forums of this category.
     */
    public function forums(): HasMany {
        return $this->hasMany(Forum::class);
    }
}
