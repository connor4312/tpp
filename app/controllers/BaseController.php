<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
        $tree = Category::with('pages')->orderBy('order', 'ASC')->get();
        View::share('navigation', $tree);

        $latest = Page::orderBy('created_at', 'DESC')->limit(5)->get();
        View::share('latest', $latest);
	}

}
