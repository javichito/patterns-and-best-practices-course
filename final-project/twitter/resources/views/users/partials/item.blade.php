<div class="col-sm-12 col-md-6">
  <div class="span3 well">
    <center>
      <p>
        <a href="/users/{{ $user->id }}">
          <img class="img-circle" src="/uploads/{{ $user->image}}" height="50">
        </a>
      </p>
      <a href="/users/{{ $user->id }}">
        {{ $user->name }}
      </a>
    </center>
  </div>
</div>
