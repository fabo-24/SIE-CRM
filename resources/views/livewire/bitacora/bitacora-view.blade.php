<div>
    <h4 class="mb-3">Bitácora de cambios</h4>

    <div class="mb-3">
        <input type="text" wire:model.debounce.500ms="search" class="form-control" placeholder="Buscar acción, modelo o descripción...">
    </div>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Acción</th>
                <th>Modelo</th>
                <th>ID Modelo</th>
                <th>Descripción</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bitacoras as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->user?->name ?? 'Sistema' }}</td>
                    <td>{{ ucfirst($item->accion) }}</td>
                    <td>{{ $item->modelo }}</td>
                    <td>{{ $item->modelo_id }}</td>
                    <td>{{ $item->descripcion }}</td>
                    <td>{{ $item->created_at->format('Y-m-d H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No hay registros</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $bitacoras->links() }}
</div>
