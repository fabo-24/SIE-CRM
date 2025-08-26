<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Aspel</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="cliente"></label>
                        <input wire:model="cliente" type="text" class="form-control" id="cliente" placeholder="Cliente">@error('cliente') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="CDA"></label>
                        <input wire:model="CDA" type="text" class="form-control" id="CDA" placeholder="Cda">@error('CDA') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="NoSerie"></label>
                        <input wire:model="NoSerie" type="text" class="form-control" id="NoSerie" placeholder="Noserie">@error('NoSerie') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Usuario"></label>
                        <input wire:model="Usuario" type="text" class="form-control" id="Usuario" placeholder="Usuario">@error('Usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Contraseña"></label>
                        <input wire:model="Contraseña" type="text" class="form-control" id="Contraseña" placeholder="Contraseña">@error('Contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Licenciamiento"></label>
                        <input wire:model="Licenciamiento" type="text" class="form-control" id="Licenciamiento" placeholder="Licenciamiento">@error('Licenciamiento') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Sistemas"></label>
                        <input wire:model="Sistemas" type="text" class="form-control" id="Sistemas" placeholder="Sistemas">@error('Sistemas') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Timbres"></label>
                        <input wire:model="Timbres" type="text" class="form-control" id="Timbres" placeholder="Timbres">@error('Timbres') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Observaciones"></label>
                        <input wire:model="Observaciones" type="text" class="form-control" id="Observaciones" placeholder="Observaciones">@error('Observaciones') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="RedVpn"></label>
                        <input wire:model="RedVpn" type="text" class="form-control" id="RedVpn" placeholder="Redvpn">@error('RedVpn') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="ContraVpn"></label>
                        <input wire:model="ContraVpn" type="text" class="form-control" id="ContraVpn" placeholder="Contravpn">@error('ContraVpn') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="FechaCaducidad"></label>
                        <input wire:model="FechaCaducidad" type="text" class="form-control" id="FechaCaducidad" placeholder="Fechacaducidad">@error('FechaCaducidad') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Aspel</h5>
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
                        <label for="CDA"></label>
                        <input wire:model="CDA" type="text" class="form-control" id="CDA" placeholder="Cda">@error('CDA') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="NoSerie"></label>
                        <input wire:model="NoSerie" type="text" class="form-control" id="NoSerie" placeholder="Noserie">@error('NoSerie') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Usuario"></label>
                        <input wire:model="Usuario" type="text" class="form-control" id="Usuario" placeholder="Usuario">@error('Usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Contraseña"></label>
                        <input wire:model="Contraseña" type="text" class="form-control" id="Contraseña" placeholder="Contraseña">@error('Contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Licenciamiento"></label>
                        <input wire:model="Licenciamiento" type="text" class="form-control" id="Licenciamiento" placeholder="Licenciamiento">@error('Licenciamiento') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Sistemas"></label>
                        <input wire:model="Sistemas" type="text" class="form-control" id="Sistemas" placeholder="Sistemas">@error('Sistemas') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Timbres"></label>
                        <input wire:model="Timbres" type="text" class="form-control" id="Timbres" placeholder="Timbres">@error('Timbres') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Observaciones"></label>
                        <input wire:model="Observaciones" type="text" class="form-control" id="Observaciones" placeholder="Observaciones">@error('Observaciones') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="RedVpn"></label>
                        <input wire:model="RedVpn" type="text" class="form-control" id="RedVpn" placeholder="Redvpn">@error('RedVpn') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="ContraVpn"></label>
                        <input wire:model="ContraVpn" type="text" class="form-control" id="ContraVpn" placeholder="Contravpn">@error('ContraVpn') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="FechaCaducidad"></label>
                        <input wire:model="FechaCaducidad" type="text" class="form-control" id="FechaCaducidad" placeholder="Fechacaducidad">@error('FechaCaducidad') <span class="error text-danger">{{ $message }}</span> @enderror
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
