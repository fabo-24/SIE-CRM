<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Venta</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="Cliente"></label>
                        <input wire:model="Cliente" type="text" class="form-control" id="Cliente" placeholder="Cliente">@error('Cliente') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Fecha"></label>
                        <input wire:model="Fecha" type="text" class="form-control" id="Fecha" placeholder="Fecha">@error('Fecha') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Contacto"></label>
                        <input wire:model="Contacto" type="text" class="form-control" id="Contacto" placeholder="Contacto">@error('Contacto') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Actividad"></label>
                        <input wire:model="Actividad" type="text" class="form-control" id="Actividad" placeholder="Actividad">@error('Actividad') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="ProcesoActividad"></label>
                        <input wire:model="ProcesoActividad" type="text" class="form-control" id="ProcesoActividad" placeholder="Procesoactividad">@error('ProcesoActividad') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Vendedor"></label>
                        <input wire:model="Vendedor" type="text" class="form-control" id="Vendedor" placeholder="Vendedor">@error('Vendedor') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Asesor"></label>
                        <input wire:model="Asesor" type="text" class="form-control" id="Asesor" placeholder="Asesor">@error('Asesor') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Costo"></label>
                        <input wire:model="Costo" type="text" class="form-control" id="Costo" placeholder="Costo">@error('Costo') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Factura"></label>
                        <input wire:model="Factura" type="text" class="form-control" id="Factura" placeholder="Factura">@error('Factura') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Poliza"></label>
                        <input wire:model="Poliza" type="text" class="form-control" id="Poliza" placeholder="Poliza">@error('Poliza') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Horario"></label>
                        <input wire:model="Horario" type="text" class="form-control" id="Horario" placeholder="Horario">@error('Horario') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Sistemas"></label>
                        <input wire:model="Sistemas" type="text" class="form-control" id="Sistemas" placeholder="Sistemas">@error('Sistemas') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Soporte"></label>
                        <input wire:model="Soporte" type="text" class="form-control" id="Soporte" placeholder="Soporte">@error('Soporte') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Contabilidad"></label>
                        <input wire:model="Contabilidad" type="text" class="form-control" id="Contabilidad" placeholder="Contabilidad">@error('Contabilidad') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Programacion"></label>
                        <input wire:model="Programacion" type="text" class="form-control" id="Programacion" placeholder="Programacion">@error('Programacion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Diseño"></label>
                        <input wire:model="Diseño" type="text" class="form-control" id="Diseño" placeholder="Diseño">@error('Diseño') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="MKT"></label>
                        <input wire:model="MKT" type="text" class="form-control" id="MKT" placeholder="Mkt">@error('MKT') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Nom"></label>
                        <input wire:model="Nom" type="text" class="form-control" id="Nom" placeholder="Nom">@error('Nom') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Equipo"></label>
                        <input wire:model="Equipo" type="text" class="form-control" id="Equipo" placeholder="Equipo">@error('Equipo') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Antiviru"></label>
                        <input wire:model="Antiviru" type="text" class="form-control" id="Antiviru" placeholder="Antiviru">@error('Antiviru') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Curso"></label>
                        <input wire:model="Curso" type="text" class="form-control" id="Curso" placeholder="Curso">@error('Curso') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="PostVenta"></label>
                        <input wire:model="PostVenta" type="text" class="form-control" id="PostVenta" placeholder="Postventa">@error('PostVenta') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="status"></label>
                        <input wire:model="status" type="text" class="form-control" id="status" placeholder="Status">@error('status') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Venta</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="Cliente"></label>
                        <input wire:model="Cliente" type="text" class="form-control" id="Cliente" placeholder="Cliente">@error('Cliente') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Fecha"></label>
                        <input wire:model="Fecha" type="text" class="form-control" id="Fecha" placeholder="Fecha">@error('Fecha') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Contacto"></label>
                        <input wire:model="Contacto" type="text" class="form-control" id="Contacto" placeholder="Contacto">@error('Contacto') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Actividad"></label>
                        <input wire:model="Actividad" type="text" class="form-control" id="Actividad" placeholder="Actividad">@error('Actividad') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="ProcesoActividad"></label>
                        <input wire:model="ProcesoActividad" type="text" class="form-control" id="ProcesoActividad" placeholder="Procesoactividad">@error('ProcesoActividad') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Vendedor"></label>
                        <input wire:model="Vendedor" type="text" class="form-control" id="Vendedor" placeholder="Vendedor">@error('Vendedor') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Asesor"></label>
                        <input wire:model="Asesor" type="text" class="form-control" id="Asesor" placeholder="Asesor">@error('Asesor') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Costo"></label>
                        <input wire:model="Costo" type="text" class="form-control" id="Costo" placeholder="Costo">@error('Costo') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Factura"></label>
                        <input wire:model="Factura" type="text" class="form-control" id="Factura" placeholder="Factura">@error('Factura') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Poliza"></label>
                        <input wire:model="Poliza" type="text" class="form-control" id="Poliza" placeholder="Poliza">@error('Poliza') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Horario"></label>
                        <input wire:model="Horario" type="text" class="form-control" id="Horario" placeholder="Horario">@error('Horario') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Sistemas"></label>
                        <input wire:model="Sistemas" type="text" class="form-control" id="Sistemas" placeholder="Sistemas">@error('Sistemas') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Soporte"></label>
                        <input wire:model="Soporte" type="text" class="form-control" id="Soporte" placeholder="Soporte">@error('Soporte') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Contabilidad"></label>
                        <input wire:model="Contabilidad" type="text" class="form-control" id="Contabilidad" placeholder="Contabilidad">@error('Contabilidad') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Programacion"></label>
                        <input wire:model="Programacion" type="text" class="form-control" id="Programacion" placeholder="Programacion">@error('Programacion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Diseño"></label>
                        <input wire:model="Diseño" type="text" class="form-control" id="Diseño" placeholder="Diseño">@error('Diseño') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="MKT"></label>
                        <input wire:model="MKT" type="text" class="form-control" id="MKT" placeholder="Mkt">@error('MKT') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Nom"></label>
                        <input wire:model="Nom" type="text" class="form-control" id="Nom" placeholder="Nom">@error('Nom') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Equipo"></label>
                        <input wire:model="Equipo" type="text" class="form-control" id="Equipo" placeholder="Equipo">@error('Equipo') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Antiviru"></label>
                        <input wire:model="Antiviru" type="text" class="form-control" id="Antiviru" placeholder="Antiviru">@error('Antiviru') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Curso"></label>
                        <input wire:model="Curso" type="text" class="form-control" id="Curso" placeholder="Curso">@error('Curso') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="PostVenta"></label>
                        <input wire:model="PostVenta" type="text" class="form-control" id="PostVenta" placeholder="Postventa">@error('PostVenta') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="status"></label>
                        <input wire:model="status" type="text" class="form-control" id="status" placeholder="Status">@error('status') <span class="error text-danger">{{ $message }}</span> @enderror
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
