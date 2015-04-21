<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 *  Retrieve gravatar URL for given users email
	 *
	 * @return string
	 */
	public function getGravatarAttribute()
	{
		$hash = md5(strtolower(trim($this->attributes['email'])));
		return "http://www.gravatar.com/avatar/$hash";
	}

	public function isAdmin()
	{
		return $this->admin;
	}

	/**
	 *  A user can have many microposts
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function microposts()
	{
		return $this->hasMany('App\Micropost');
	}

	public function follows()
	{
		return $this->belongsToMany('App\User','user_follows','user_id','follow_id');
	}

	public function followers()
	{
		return $this->belongsToMany('App\User', 'user_follows', 'follow_id', 'user_id');
	}

	public function currentlyFollows(User $otheruser)
	{
		// view user profile
		// pass user profile id / object to function
		// retrives array of all followed users
		// uses in_array function to check if user is already followed.
		$idInArray = $this->follows()->lists('follow_id');
	}

}
