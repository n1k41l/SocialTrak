<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class RelationshipsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function store()
	{
		$follow = User::findOrFail(Input::get('follow_id'));

		Auth::user()->follows()
				->save($follow);

		flash()->success('You are now following this user');

		return Redirect::back();
	}

	public function destroy($userIdToUnfollow)
	{
		Auth::user()->follows()->detach($userIdToUnfollow);

		flash()->success('You have now unfollowed this user');

		return Redirect::back();

	}

}
