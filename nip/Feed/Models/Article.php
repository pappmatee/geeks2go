<?php

namespace Nip\Feed\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Nip\Category\Models\Category;
use Nip\Category\Models\CategoryContent;
use Nip\Profile\Models\User;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'body'];

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->hasManyThrough(Category::class, CategoryContent::class, 'category_id', 'id');
        /*return $this->morphMany(CategoryContent::class, 'contentable');*/
    }
}
