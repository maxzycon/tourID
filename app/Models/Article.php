<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    protected $fillable = ["user_id","articleName","articleContent","articleSlug","articleThumbnailPath"];

    public function likes(): HasMany
    {
        return $this->hasMany(ArticleLike::class);
    }

    public function comments(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot(['comment']);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
