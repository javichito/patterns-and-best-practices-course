@forelse ($statuses as $status)
    @include('statuses.partials.item', ['status' => $status])
@empty
    <p>
      No se encontraron resultados.
    </p>
@endforelse
