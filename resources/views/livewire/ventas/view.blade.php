@section('title', __('Ventas'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="bi-house-check-fill text-info"></i>
							Ventas </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Ventas">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="bi-plus-lg"></i>  Añadir Ventas
						</div>
						<div>
    <label for="fecha_inicio">Fecha de inicio</label>
    <input type="date" wire:model="fecha_inicio" class="form-control">
</div>
<div>
    <label for="fecha_fin">Fecha de fin</label>
    <input type="date" wire:model="fecha_fin" class="form-control">
</div>
<button wire:click="aplicarFiltroFecha" class="btn btn-primary">
    Buscar
</button>


<!-- Botón para borrar filtros -->
<div>
    <button wire:click="clearFilters" class="bi-plus-lg">Borrar Filtros</button>
</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.ventas.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Cliente</th>
								<th>Fecha</th>
								<th>Contacto</th>
								<th>Actividad</th>
								<th>Procesoactividad</th>
								<th>Vendedor</th>
								<th>Asesor</th>
								<th>Costo</th>
								<th>Factura</th>
								<th>Poliza</th>
								<th>Horario</th>
								<th>Sistemas</th>
								<th>Soporte</th>
								<th>Contabilidad</th>
								<th>Programacion</th>
								<th>Diseño</th>
								<th>Mkt</th>
								<th>Nom</th>
								<th>Equipo</th>
								<th>Antiviru</th>
								<th>Curso</th>
								<th>Postventa</th>
								<th>Status</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($ventas as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->Cliente }}</td>
								<td>{{ $row->Fecha }}</td>
								<td>{{ $row->Contacto }}</td>
								<td>{{ $row->Actividad }}</td>
								<td>{{ $row->ProcesoActividad }}</td>
								<td>{{ $row->Vendedor }}</td>
								<td>{{ $row->Asesor }}</td>
								<td>{{ $row->Costo }}</td>
								<td>{{ $row->Factura }}</td>
								<td>{{ $row->Poliza }}</td>
								<td>{{ $row->Horario }}</td>
								<td>{{ $row->Sistemas }}</td>
								<td>{{ $row->Soporte }}</td>
								<td>{{ $row->Contabilidad }}</td>
								<td>{{ $row->Programacion }}</td>
								<td>{{ $row->Diseño }}</td>
								<td>{{ $row->MKT }}</td>
								<td>{{ $row->Nom }}</td>
								<td>{{ $row->Equipo }}</td>
								<td>{{ $row->Antiviru }}</td>
								<td>{{ $row->Curso }}</td>
								<td>{{ $row->PostVenta }}</td>
								<td>{{ $row->status }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Acciones
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="bi-pencil-square"></i> Editar </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Venta id {{$row->id}}? \nDeleted Ventas cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="bi-trash3-fill"></i> Borrar </a></li>  
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
					<div class="float-end">{{ $ventas->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>