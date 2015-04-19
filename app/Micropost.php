<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model {

	protected $fillable = ['content'];

	/**
	 *  A micropost is owned by a user
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
