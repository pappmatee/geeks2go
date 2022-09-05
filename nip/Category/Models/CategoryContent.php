<?php

namespace Nip\Category\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryContent extends Model
{
    use HasFactory;

    protected $table = 'category_content';

    protected $fillable = ['category_id', 'contentable_type', 'contentable_id'];

    public function contentable()
    {
        return $this->morphTo();
    }

    public function category()
    {
        return $this->hasMany(Category::class, 'category_id', 'id');
    }
}
