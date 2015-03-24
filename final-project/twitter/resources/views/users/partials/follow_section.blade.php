@unless(Auth::id() === $user->id)
  @if (Auth::user()->isFollowing($user->id))
    @include('users.partials.unfollow_button', ['user' => $user])
  @else
    @include('users.partials.follow_button', ['user' => $user])
  @endif
@endif
