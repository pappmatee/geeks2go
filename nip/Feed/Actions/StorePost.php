<?php

namespace Nip\Feed\Actions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Validator;
use Nip\Category\Models\CategoryContent;
use Nip\Feed\Models\Article;
use Nip\Feed\Models\Feed;
use Nip\Feed\Models\Image;
use Nip\Feed\Models\Video;

class StorePost
{
    public function __invoke(string $postType, array $inputs): Collection|array
    {
        $validated = Validator::make($inputs, [
            'title' => ['required', 'string', 'max:255'],
            'body' => ['nullable'],
            'category' => ['required'],
            'image' => ['nullable'],
            'video' => ['nullable'],
        ])->validate();

        if($postType == 'article') {
            $article = Article::create([
                'user_id' => auth()->user()->id,
                'title' => $validated['title'],
                'body' => $validated['body']
            ]);

            CategoryContent::create([
                'category_id' => $validated['category'],
                'contentable_type' => Article::class,
                'contentable_id' => $article->id
            ]);
        }

        if($postType == 'image') {
            $image = Image::create([
                'user_id' => auth()->user()->id,
                'title' => $validated['title'],
                'path' => $validated['image']->store('uploads')
            ]);

            CategoryContent::create([
                'category_id' => $validated['category'],
                'contentable_type' => Image::class,
                'contentable_id' => $image->id
            ]);
        }

        if($postType == 'video') {
            $video = Video::create([
                'user_id' => auth()->user()->id,
                'title' => $validated['title'],
                'path' => $validated['video']->store('uploads')
            ]);

            CategoryContent::create([
                'category_id' => $validated['category'],
                'contentable_type' => Video::class,
                'contentable_id' => $video->id
            ]);
        }

        return Feed::all()->fresh();
    }
}
