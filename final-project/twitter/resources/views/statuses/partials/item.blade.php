<div class="row">
	<div class="col-sm-1">
		<div class="thumbnail">
			<a href="/users/{{ $status->user->id }}">
				<img src="/uploads/{{ $status->user->image}}" height="40">
			</a>
		</div>
	</div>

	<div class="col-sm-11">
		<div class="panel panel-default">
			<div class="panel-heading">
				<a href="/users/{{ $status->user->id }}">
					<strong>{{ $status->user->name }}</strong>
				</a>
				<span class="text-muted">publicado {{ $status->created_at->diffForHumans() }}</span>
			</div>
			<div class="panel-body">
				{{ $status->content }}
			</div>
		</div>
	</div>
</div>
