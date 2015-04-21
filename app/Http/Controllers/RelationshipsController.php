<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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

		return redirect('/');
	}

	public function destroy($id, $unfollow)
	{

	}

}
