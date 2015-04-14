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
		$title = 'Home';
		return view('pages.home', compact('title'));
	}

	/**
	 * Show the help page
	 *
	 * @return \Illuminate\View\View
	 */
	public function help()
	{
		$title = 'Help';
		return view('pages.help', compact('title'));
	}

	/**
	 * Show the about us page
	 *
	 * @return \Illuminate\View\View
	 */
	public function about()
	{
		$title = 'About';
		return view('pages.about', compact('title'));
	}

}
