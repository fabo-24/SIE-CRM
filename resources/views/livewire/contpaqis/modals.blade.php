<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Contpaqi</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="cliente"></label>
                        <input wire:model="cliente" type="text" class="form-control" id="cliente" placeholder="Cliente">@error('cliente') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="NoSerie"></label>
                        <input wire:model="NoSerie" type="text" class="form-control" id="NoSerie" placeholder="Noserie">@error('NoSerie') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="FechaCaducidad"></label>
                        <input wire:model="FechaCaducidad" type="text" class="form-control" id="FechaCaducidad" placeholder="Fechacaducidad">@error('FechaCaducidad') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Sistemas"></label>
                        <input wire:model="Sistemas" type="text" class="form-control" id="Sistemas" placeholder="Sistemas">@error('Sistemas') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Licencia"></label>
                        <input wire:model="Licencia" type="text" class="form-control" id="Licencia" placeholder="Licencia">@error('Licencia') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Usuarios"></label>
                        <input wire:model="Usuarios" type="text" class="form-control" id="Usuarios" placeholder="Usuarios">@error('Usuarios') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Vendedor"></label>
                        <input wire:model="Vendedor" type="text" class="form-control" id="Vendedor" placeholder="Vendedor">@error('Vendedor') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                         <label for="certificadoFile">Certificado (PDF)</label>
                         <input type="file" wire:model="certificadoFile" class="form-control">
                         @error('certificadoFile') <span class="text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Contpaqi</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="cliente"></label>
                        <input wire:model="cliente" type="text" class="form-control" id="cliente" placeholder="Cliente">@error('cliente') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="NoSerie"></label>
                        <input wire:model="NoSerie" type="text" class="form-control" id="NoSerie" placeholder="Noserie">@error('NoSerie') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="FechaCaducidad"></label>
                        <input wire:model="FechaCaducidad" type="text" class="form-control" id="FechaCaducidad" placeholder="Fechacaducidad">@error('FechaCaducidad') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Sistemas"></label>
                        <input wire:model="Sistemas" type="text" class="form-control" id="Sistemas" placeholder="Sistemas">@error('Sistemas') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Licencia"></label>
                        <input wire:model="Licencia" type="text" class="form-control" id="Licencia" placeholder="Licencia">@error('Licencia') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Usuarios"></label>
                        <input wire:model="Usuarios" type="text" class="form-control" id="Usuarios" placeholder="Usuarios">@error('Usuarios') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Vendedor"></label>
                        <input wire:model="Vendedor" type="text" class="form-control" id="Vendedor" placeholder="Vendedor">@error('Vendedor') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                         <label for="certificadoFile">Certificado (PDF)</label>
                         <input type="file" wire:model="certificadoFile" class="form-control">
                         @error('certificadoFile') <span class="text-danger">{{ $message }}</span> @enderror
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
