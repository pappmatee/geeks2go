<?php

namespace Nip\Category\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CategoriesController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
        return view('categories.index');
    }
}
