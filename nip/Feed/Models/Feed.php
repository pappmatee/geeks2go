<?php

namespace Nip\Feed\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Feed extends Model
{
    use HasFactory;

    protected $fillable = ['contentable_type', 'contentable_id'];

    public function contentable(): MorphTo
    {
        return $this->morphTo();
    }
}
