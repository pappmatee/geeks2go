<?php

namespace Nip\Feed\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class FeedController extends Controller
{
    public function __invoke(): View
    {
        return view('feed.index');
    }
}
