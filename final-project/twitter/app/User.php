<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

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

	public function statuses(){
		return $this->hasMany('App\Status');
	}

	public function followings(){
		return $this->belongsToMany('App\User', 'relationships', 'follower_id', 'following_id');
	}

	public function followers(){
		return $this->belongsToMany('App\User', 'relationships', 'following_id', 'follower_id');
	}

	public function isFollowing($followingId){
		return in_array($followingId, $this->followings->lists('id'));
	}

}
