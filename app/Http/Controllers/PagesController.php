<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller {

	/**
	 * Show home page
	 *
	 * @return \Illuminate\View\View
	 */
	public function home()
	{
		$title = 'Home';
		$feed_items=[];

		if (Auth::check()) 
		{
			$feed_items = Auth::user()->microposts()
				->latest('updated_at')
				->paginate(10);
		}
		return view('pages.home', compact('title','feed_items'));
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
		$title = 'About Us';
		return view('pages.about', compact('title'));
	}

	/**
	 * Show the contact us page
	 *
	 * @return \Illuminate\View\View
	 */
	public function contact()
	{
		$title = 'Contact Us';
		return view('pages.contact', compact('title'));
	}

}
