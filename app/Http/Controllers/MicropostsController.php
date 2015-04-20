<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Micropost;
use App\Http\Requests\MicropostRequest;
use Auth;

class MicropostsController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MicropostRequest $request)
	{
		$this->createMicropost($request);

		flash()->success('Micropost Created!');

		return redirect('/');

	}

	

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Micropost $micropost)
	{
		$micropost->delete();

		flash()->error('Micropost Deleted!');

		return redirect('/');
	}

	private function createMicropost(MicropostRequest $request)
	{
		$micropost = Auth::user()->microposts()->create($request->all());

		return $micropost;
	}

}
