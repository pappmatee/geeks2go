<?php

namespace Nip\Feed\Observers;

use Nip\Feed\Models\Article;
use Nip\Feed\Models\Feed;

class ArticleObserver
{
    public function created(Article $article)
    {
        Feed::create([
           'contentable_type' => Article::class,
           'contentable_id' => $article->id,
        ]);
    }

    public function deleted(Article $article)
    {
        //
    }
}
