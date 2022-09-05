<?php

namespace Nip\Feed\Observers;

use Nip\Feed\Models\Feed;
use Nip\Feed\Models\Video;

class VideoObserver
{
    public function created(Video $video)
    {
        Feed::create([
            'contentable_type' => Video::class,
            'contentable_id' => $video->id,
        ]);
    }

    public function deleted(Video $video)
    {
        //
    }
}
