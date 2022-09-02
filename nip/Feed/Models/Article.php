<?php

namespace Nip\Feed\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Nip\Profile\Models\User;

class Article extends Model
{
    use HasFactory;

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
