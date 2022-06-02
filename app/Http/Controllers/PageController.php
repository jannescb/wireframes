<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Inertia\Inertia;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the page.
     *
     * @return void
     */
    public function __invoke(Request $request)
    {
        $page = Page::fromRequestOrFail($request);

        $page->content->parse();
        $page->attributes->parse();

        return Inertia::render('Pages/Show', [
            'page' => $page
        ]);
    }
}
