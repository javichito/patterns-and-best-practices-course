{!! Form::open(['url' => 'users/' . Auth::id() . '/followings', 'method' => 'delete']) !!}
  <input type="hidden" name="following_id" value="{{ $user->id }}">

  {!! Form::submit('Dejar de seguir', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
