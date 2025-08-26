<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Upoliza</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="poliza_id"></label>
                        <input wire:model="poliza_id" type="text" class="form-control" id="poliza_id" placeholder="Poliza Id">@error('poliza_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fecha"></label>
                        <input wire:model="fecha" type="text" class="form-control" id="fecha" placeholder="Fecha">@error('fecha') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="inicio"></label>
                        <input wire:model="inicio" type="text" class="form-control" id="inicio" placeholder="Inicio">@error('inicio') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fin"></label>
                        <input wire:model="fin" type="text" class="form-control" id="fin" placeholder="Fin">@error('fin') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="duracion"></label>
                        <input wire:model="duracion" type="text" class="form-control" id="duracion" placeholder="Duracion">@error('duracion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="ajuste"></label>
                        <input wire:model="ajuste" type="text" class="form-control" id="ajuste" placeholder="Ajuste">@error('ajuste') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="caso"></label>
                        <input wire:model="caso" type="text" class="form-control" id="caso" placeholder="Caso">@error('caso') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="bloques_consumidos"></label>
                        <input wire:model="bloques_consumidos" type="text" class="form-control" id="bloques_consumidos" placeholder="Bloques Consumidos">@error('bloques_consumidos') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="descuento"></label>
                        <input wire:model="descuento" type="text" class="form-control" id="descuento" placeholder="Descuento">@error('descuento') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="atendio"></label>
                        <input wire:model="atendio" type="text" class="form-control" id="atendio" placeholder="Atendio">@error('atendio') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Upoliza</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="poliza_id"></label>
                        <input wire:model="poliza_id" type="text" class="form-control" id="poliza_id" placeholder="Poliza Id">@error('poliza_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fecha"></label>
                        <input wire:model="fecha" type="text" class="form-control" id="fecha" placeholder="Fecha">@error('fecha') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="inicio"></label>
                        <input wire:model="inicio" type="text" class="form-control" id="inicio" placeholder="Inicio">@error('inicio') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fin"></label>
                        <input wire:model="fin" type="text" class="form-control" id="fin" placeholder="Fin">@error('fin') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="duracion"></label>
                        <input wire:model="duracion" type="text" class="form-control" id="duracion" placeholder="Duracion">@error('duracion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="ajuste"></label>
                        <input wire:model="ajuste" type="text" class="form-control" id="ajuste" placeholder="Ajuste">@error('ajuste') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="caso"></label>
                        <input wire:model="caso" type="text" class="form-control" id="caso" placeholder="Caso">@error('caso') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="bloques_consumidos"></label>
                        <input wire:model="bloques_consumidos" type="text" class="form-control" id="bloques_consumidos" placeholder="Bloques Consumidos">@error('bloques_consumidos') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="descuento"></label>
                        <input wire:model="descuento" type="text" class="form-control" id="descuento" placeholder="Descuento">@error('descuento') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="atendio"></label>
                        <input wire:model="atendio" type="text" class="form-control" id="atendio" placeholder="Atendio">@error('atendio') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary">Save</button>
            </div>
       </div>
    </div>
</div>
