<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Show home page
	 *
	 * @return \Illuminate\View\View
	 */
	public function home()
	{
		return view('pages.home');
	}

	/**
	 * Show the help page
	 *
	 * @return \Illuminate\View\View
	 */
	public function help()
	{
		return view('pages.help');
	}

	/**
	 * Show the about us page
	 *
	 * @return \Illuminate\View\View
	 */
	public function about()
	{
		return view('pages.about');
	}

}
