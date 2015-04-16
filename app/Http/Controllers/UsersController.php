<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function signup()
	{
		$title = 'Sign Up';
		return view('auth.register', compact('title'));
	}

	public function show(User $user)
	{
		return view('users.show', compact('user'));
	}

	

}
