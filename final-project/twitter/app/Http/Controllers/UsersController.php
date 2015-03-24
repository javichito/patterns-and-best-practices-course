<?php namespace App\Http\Controllers;

use Auth;
use Input;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsersController extends Controller {

	public function show($userId)
  {
    $user = User::findOrFail($userId);

    return view('users.show', ['user' => $user]);
  }

  public function follow()
  {
    $currentUser = Auth::user();
    $followingId = Input::get('following_id');
    $following   = User::findOrFail($followingId);

    $currentUser->followings()->save($following);

    return redirect()->back();
  }

  public function unfollow()
  {
    $currentUser = Auth::user();
    $followingId = Input::get('following_id');

    $currentUser->followings()->detach($followingId);

    return redirect()->back();
  }

}
