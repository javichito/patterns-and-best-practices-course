@foreach ($users as $user)
	@include('users.partials.item', ['user' => $user])
@endforeach
