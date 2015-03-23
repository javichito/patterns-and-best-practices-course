@foreach($statuses as $status)
	@include('statuses.partials.item', ['status' => $status])
@endforeach
