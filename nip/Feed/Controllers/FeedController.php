<?php

namespace Nip\Feed\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class FeedController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('feed.index');
    }

    public function create(): Factory|View|Application
    {
        return view('feed.create');
    }
}
