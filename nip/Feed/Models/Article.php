<?php

namespace Nip\Feed\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Nip\Profile\Models\User;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'body'];

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function feed()
    {
        return $this->morphMany(Feed::class, 'contentable');
    }
}
