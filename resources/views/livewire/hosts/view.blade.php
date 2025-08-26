@section('title', __('Hosts'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="bi-house-check-fill text-info"></i>
							Hosts </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Hosts">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="bi-plus-lg"></i>  Añadir Hosts
						</div>
						<div class="row mb-3">
    <!-- Filtro por Fecha de Vencimiento -->
    <div class="col-md-3">
        <label for="fechaInicio">Fecha de Inicio:</label>
        <input wire:model="fechaInicio" type="date" class="form-control">
    </div>

    <div class="col-md-3">
        <label for="fechaFin">Fecha de Fin:</label>
        <input wire:model="fechaFin" type="date" class="form-control">
    </div>

    <!-- Botón para limpiar filtros -->
    <div class="col-md-2 d-flex align-items-end">
        <button wire:click="limpiarFiltros" class="btn btn-secondary w-100">Limpiar Filtros</button>
    </div>
	</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.hosts.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Correo</th>
								<th>Contraseña</th>
								<th>Vencimiento</th>
								<th>Plan</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($hosts as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->Correo }}</td>
								<td>{{ $row->Contraseña }}</td>
								<td>{{ $row->Vencimiento }}</td>
								<td>{{ $row->Plan }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Acciones
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="bi-pencil-square"></i> Editar </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Host id {{$row->id}}? \nDeleted Hosts cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="bi-trash3-fill"></i> Borrar </a></li>  
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
					<div class="float-end">{{ $hosts->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>