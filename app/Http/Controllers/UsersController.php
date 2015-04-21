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
	 * Display a registration form.
	 *
	 * @return Response
	 */
	public function signup()
	{
		$title = 'Sign Up';
		return view('auth.register', compact('title'));
	}

	/**
	 * show an existing user
	 *
	 * @param User $user
	 * @return \Illuminate\View\View
	 */
	public function show(User $user)
	{
		$microposts = $user->microposts()
			->latest('updated_at')
			->paginate(10);
			
		return view('users.show', compact('user', 'microposts'));
	}

	/**
	 * show the page to edit existing user
	 *
	 * @param User $user
	 * @return \Illuminate\View\View
	 */
	public function edit(User $user)
	{

		return view('users.edit', compact('user'));

	}


	/**
	 * update an existing user
	 *
	 * @param User $user
	 * @param UserRequest $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function update(User $user, UserRequest $request)
	{
		$user->update($request->all());

		flash()->success('User updated successfully!');
		return redirect('/users/'.$user->id);
	}

	/**
	 * show all users
	 *
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$title = 'All Users';
		$users = $this->showAllUsers();

		return view('users.index', compact('title','users'));
	}

	/**
	 * delete an existing user
	 *
	 * @param User $user
	 * @return \Illuminate\View\View
	 * @throws \Exception
	 */
	public function destroy(User $user)
	{
		$user->delete();

		$title = 'All Users';
		$users = $this->showAllUsers();

		flash()->success('User deleted!');
		return view('users.index', compact('title', 'users'));
	}

	public function following(User $user)
	{
		$title = "Following";
		$users = $user->follows()
			->paginate(10);

		return view('users.show_follow', compact('user', 'users', 'title'));
	}

	public function followers(User $user)
	{
		$title = 'Followers';
		$users = $user->followers()
			->paginate(10);

		return view('users.show_follow', compact('user', 'users', 'title'));

	}

	/**
	 *  return all users
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	private function showAllUsers()
	{
		return User::paginate(10);
	}

}
