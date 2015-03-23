@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<h2>Twitlers</h2>

			@include('users.partials.collection', ['users' => $users])
		</div>

		<div class="col-md-10">
			@include('statuses.partials.collection', ['statuses', $statuses])
		</div>
	</div>
</div>
@endsection
