<?php

class DashboardController extends BaseController {

    /**
     * Showing the Dashboard Page
     *
     */
	public function getIndex()
	{
		return View::make('dashboard.index');
	}

}
