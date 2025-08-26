@section('title', __('Contribuyentes'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="bi-house-check-fill text-info"></i>
							Contribuyentes </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Contribuyentes">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="bi-plus-lg"></i>  Añadir Contribuyentes
						</div>
						<div class="row mb-3">
    <div class="col-md-4">
        <select wire:model="tipoFiltro" class="form-control">
            <option value="">Selecciona Tipo</option>
            <option value="fiel">FIEL</option>
            <option value="csd">CSD</option>
        </select>
    </div>
    <div class="col-md-3">
        <input type="date" wire:model="fechaInicio" class="form-control">
    </div>
    <div class="col-md-3">
        <input type="date" wire:model="fechaFin" class="form-control">
    </div>
    <div class="col-md-2">
        <button wire:click="filtrar" class="btn btn-primary">Buscar</button>
    </div>
					</div>
					
				</div>
				
</div>

				<div class="card-body">
						@include('livewire.contribuyentes.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Rfc</th>
								<th>Nombre</th>
								<th>Regimen</th>
								<th>Email</th>
								<th>Telefono</th>
								<th>Factura Contraseña</th>
								<th>Nomina Contraseña</th>
								<th>Vencimiento Csd</th>
								<th>Ciec Contraseña</th>
								<th>Fiel Contraseña</th>
								<th>Vencimiento Fiel</th>
								<th>Ev Imss Usuario</th>
								<th>Ev Imss Contraseña</th>
								<th>Idse Usuario</th>
								<th>Idse Contraseña</th>
								<th>Sipare Usuario</th>
								<th>Sipare Contraseña</th>
								<th>ISN 3% Usuario</th>
								<th>ISN 3% Contraseña</th>
								<th>Colabora Usuario</th>
								<th>Colabora Contraseña</th>
								<th>Infonavit Usuario</th>
								<th>Infonavit Contraseña</th>
								<th>Citas Jal Usuario</th>
								<th>Citas Jal Contraseña</th>
								<th>Sas Usuario</th>
								<th>Sas Contraseña</th>
								<th>Extra</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($contribuyentes as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->RFC }}</td>
								<td>{{ $row->Nombre }}</td>
								@php($catalogo = \App\Http\Livewire\Contribuyentes::REGIMENES)
								<td>{{ $catalogo[$row->Regimen] ?? 'Desconocido' }}</td>
								<td>{{ $row->Email }}</td>
								<td>{{ $row->Telefono }}</td>
								<td>{{ $row->Factura_contraseña }}</td>
								<td>{{ $row->Nomina_contraseña }}</td>
								<td>{{ $row->Vencimiento_CSD }}</td>
								<td>{{ $row->Ciec_contraseña }}</td>
								<td>{{ $row->Fiel_contraseña }}</td>
								<td>{{ $row->Vencimiento_fiel }}</td>
								<td>{{ $row->Ev_imss_usuario }}</td>
								<td>{{ $row->Ev_imss_contraseña }}</td>
								<td>{{ $row->Idse_usuario }}</td>
								<td>{{ $row->Idse_contraseña }}</td>
								<td>{{ $row->Sipare_usuario }}</td>
								<td>{{ $row->Sipare_contraseña }}</td>
								<td>{{ $row->Usuario_2 }}</td>
								<td>{{ $row->Contraseña_2 }}</td>
								<td>{{ $row->Colabora_usuario }}</td>
								<td>{{ $row->Colabora_contraseña }}</td>
								<td>{{ $row->Infonavit_usuario }}</td>
								<td>{{ $row->Infonavit_contraseña }}</td>
								<td>{{ $row->Citas_jal_usuario }}</td>
								<td>{{ $row->Citas_jal_contraseña }}</td>
								<td>{{ $row->Sas_usuario }}</td>
								<td>{{ $row->Sas_contraseña }}</td>
								<td>{{ $row->Extra }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Acciones
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="bi-pencil-square"></i> Editar </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Contribuyente id {{$row->id}}? \nDeleted Contribuyentes cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="bi-trash3-fill"></i> Borrar </a></li>  
										</ul>
									</div>								
								</td>
							</tr>
							@empty
							<tr>
								<td class="text-center" colspan="100%">No data Found </td>
							</tr>
							@endforelse
						</tbody>
					</table>						
					<div class="float-end">{{ $contribuyentes->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>