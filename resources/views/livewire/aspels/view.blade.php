@section('title', __('Aspels'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="bi-house-check-fill text-info"></i>
							Aspel </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Aspels">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="bi-plus-lg"></i>  Añadir Aspels
						</div>
						<div class="row mb-3">
    <div class="col">
        <label for="fecha_inicio">Fecha Inicio</label>
        <input wire:model="fechaInicio" type="date" class="form-control">
    </div>
    <div class="col">
        <label for="fecha_fin">Fecha Fin</label>
        <input wire:model="fechaFin" type="date" class="form-control">
    </div>
    <div class="col d-flex align-items-end">
        <button wire:click="limpiarFiltros" class="btn btn-secondary">Limpiar Filtros</button>
    </div>
</div>
					</div>
				</div>
				<div class="card-body">
						@include('livewire.aspels.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Cliente</th>
								<th>Cda</th>
								<th>Noserie</th>
								<th>Usuario</th>
								<th>Contraseña</th>
								<th>Licenciamiento</th>
								<th>Sistemas</th>
								<th>Timbres</th>
								<th>Observaciones</th>
								<th>Redvpn</th>
								<th>Contravpn</th>
								<th>Fechacaducidad</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($aspels as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->cliente }}</td>
								<td>{{ $row->CDA }}</td>
								<td>{{ $row->NoSerie }}</td>
								<td>{{ $row->Usuario }}</td>
								<td>{{ $row->Contraseña }}</td>
								<td>{{ $row->Licenciamiento }}</td>
								<td>{{ $row->Sistemas }}</td>
								<td>{{ $row->Timbres }}</td>
								<td>{{ $row->Observaciones }}</td>
								<td>{{ $row->RedVpn }}</td>
								<td>{{ $row->ContraVpn }}</td>
								<td>{{ $row->FechaCaducidad }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Acciones
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="bi-pencil-square"></i> Editar </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Aspel id {{$row->id}}? \nDeleted Aspels cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="bi-trash3-fill"></i> Borrar </a></li>  
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
					<div class="float-end">{{ $aspels->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>