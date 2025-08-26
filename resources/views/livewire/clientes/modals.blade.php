<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Cliente</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="RazonSocial"></label>
                        <input wire:model="RazonSocial" type="text" class="form-control" id="RazonSocial" placeholder="Razonsocial">@error('RazonSocial') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Contacto"></label>
                        <input wire:model="Contacto" type="text" class="form-control" id="Contacto" placeholder="Contacto">@error('Contacto') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Numero"></label>
                        <input wire:model="Numero" type="text" class="form-control" id="Numero" placeholder="Numero">@error('Numero') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="WhatsApp"></label>
                        <input wire:model="WhatsApp" type="text" class="form-control" id="WhatsApp" placeholder="Whatsapp">@error('WhatsApp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Correo"></label>
                        <input wire:model="Correo" type="text" class="form-control" id="Correo" placeholder="Correo">@error('Correo') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Contacto2"></label>
                        <input wire:model="Contacto2" type="text" class="form-control" id="Contacto2" placeholder="Contacto2">@error('Contacto2') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Numero2"></label>
                        <input wire:model="Numero2" type="text" class="form-control" id="Numero2" placeholder="Numero2">@error('Numero2') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Observacion"></label>
                        <input wire:model="Observacion" type="text" class="form-control" id="Observacion" placeholder="Observacion">@error('Observacion') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Cliente</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="RazonSocial"></label>
                        <input wire:model="RazonSocial" type="text" class="form-control" id="RazonSocial" placeholder="Razonsocial">@error('RazonSocial') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Contacto"></label>
                        <input wire:model="Contacto" type="text" class="form-control" id="Contacto" placeholder="Contacto">@error('Contacto') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Numero"></label>
                        <input wire:model="Numero" type="text" class="form-control" id="Numero" placeholder="Numero">@error('Numero') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="WhatsApp"></label>
                        <input wire:model="WhatsApp" type="text" class="form-control" id="WhatsApp" placeholder="Whatsapp">@error('WhatsApp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Correo"></label>
                        <input wire:model="Correo" type="text" class="form-control" id="Correo" placeholder="Correo">@error('Correo') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Contacto2"></label>
                        <input wire:model="Contacto2" type="text" class="form-control" id="Contacto2" placeholder="Contacto2">@error('Contacto2') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Numero2"></label>
                        <input wire:model="Numero2" type="text" class="form-control" id="Numero2" placeholder="Numero2">@error('Numero2') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Observacion"></label>
                        <input wire:model="Observacion" type="text" class="form-control" id="Observacion" placeholder="Observacion">@error('Observacion') <span class="error text-danger">{{ $message }}</span> @enderror
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
