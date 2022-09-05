<?php

namespace Nip\Feed\Observers;

use Nip\Feed\Models\Feed;
use Nip\Feed\Models\Image;

class ImageObserver
{
    public function created(Image $image)
    {
        Feed::create([
            'contentable_type' => Image::class,
            'contentable_id' => $image->id,
        ]);
    }

    public function deleted(Image $image)
    {
        //
    }
}
