@forelse ($users as $user)
  @include('users.partials.item', ['user' => $user])
@empty
  <p class="col-sm-12">
    No se encontraron resultados.
  </p>
@endforelse
