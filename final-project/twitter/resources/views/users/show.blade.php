@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="row">
        <div class="col-xs-12 col-sm-4 text-right">
          <img class="img-circle" src="/uploads/{{ $user->image}}" height="90">
        </div>
        <div class="col-xs-12 col-sm-8">
          <h3>
            {{ $user->name }}
          </h3>
          @include('users.partials.follow_section', ['user' => $user])
        </div>
      </div>


      <div class="col-sm-12">
        <h3>Siguiendo</h3>

        <div class="row">
          @include('users.partials.collection', ['users' => $user->followings])
        </div>
      </div>

      <div class="col-sm-12">
        <h3>Seguidores</h3>

        <div class="row">
          @include('users.partials.collection', ['users' => $user->followers])
        </div>
      </div>
    </div>

    <div class="col-md-8">
      @include('statuses.partials.collection', ['statuses' => $user->statuses])
    </div>
  </div>
</div>
@endsection
