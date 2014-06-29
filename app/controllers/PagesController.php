<?php

class PagesController extends BaseController
{
    public function index()
    {
        $page = Page::where('is_home', true)->first();

        return View::make('page')->with('page', $page);
    }

    public function category($category)
    {
        $c = Category::where('slug', $category)->first();

        if (!$c) {
            return View::make('404');
        }

        $pages = $c->pages;
        if (count($pages) == 1) {
            return Redirect::route('page', ['category' => $category, 'page' => $pages[0]->slug]);
        }

        return View::make('category')->with('category', $c);
    }

    public function page($category, $page)
    {
        $c = Page::where('slug', $page)->first();

        return View::make('page')->with('page', $c);
    }

    public function search()
    {
        $query = '%' . Input::get('query') . '%';
        $page = Page::whereRaw('title LIKE ?', [$query])->first();

        if ($page) {
            return Redirect::route('page', ['category' => 'p', 'page' => $page->slug]);
        } else {
            return View::make('404');
        }
    }
} 