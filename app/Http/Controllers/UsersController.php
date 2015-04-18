<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

use App\User;


class UsersController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', ['except' => ['signup', 'show']]);
		$this->middleware('permittedUser', ['only' => ['edit', 'update']]);
	}

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

	/**
	 * @param User $user
	 * @return \Illuminate\View\View
	 */
	public function show(User $user)
	{
		return view('users.show', compact('user'));
	}

	/**
	 * @param User $user
	 * @return \Illuminate\View\View
	 */
	public function edit(User $user)
	{

		return view('users.edit', compact('user'));

	}


	/**
	 * @param User $user
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function update(User $user, UserRequest $request)
	{
		$user->update($request->all());

		flash()->success('User updated successfully!');
		return redirect('/users/'.$user->id);
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$title = 'All Users';
		$users = User::all();

		return view('users.index', compact('title','users'));
	}

	public function destroy(User $user)
	{
		$user->delete();
		$title = 'All Users';
		flash()->success('User deleted!');
		return view('users.index', compact('title'));
	}

	

}
