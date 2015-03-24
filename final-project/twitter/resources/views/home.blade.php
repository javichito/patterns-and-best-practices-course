@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h2>Twitlers</h2>

      <div class="row">
  			@include('users.partials.collection', ['users' => $users])
      </div>
		</div>

		<div class="col-md-8">
      <h2>Actividad</h2>

			@include('statuses.partials.collection', ['statuses', $statuses])
		</div>
	</div>
</div>
@endsection
