<div class="row">
	<div class="col-sm-1">
		<div class="thumbnail">
			<img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" height="40">
		</div>
	</div>

	<div class="col-sm-11">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>{{ $status->user->name }}</strong> <span class="text-muted">commented 5 days ago</span>
			</div>
			<div class="panel-body">
				{{ $status->content }}
			</div>
		</div>
	</div>
</div>
