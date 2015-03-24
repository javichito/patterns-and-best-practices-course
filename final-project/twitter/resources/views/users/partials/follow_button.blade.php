{!! Form::open(['url' => 'users/' . Auth::id() . '/followings']) !!}
  <input type="hidden" name="following_id" value="{{ $user->id }}">

  {!! Form::submit('Seguir', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
