@section('title', __('Polizas'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="bi-house-check-fill text-info"></i>
							Polizas </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Polizas">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="bi-plus-lg"></i>  Añadir Polizas
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.polizas.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Cliente</th>
								<th>Contacto</th>
								<th>Fecha Inicio</th>
								<th>Fecha Fin</th>
								<th>Bloques Contratados</th>
								<th>Bloques Disponibles</th>
								<th>Estado</th>
								<th>Observaciones</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($polizas as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->cliente }}</td>
								<td>{{ $row->contacto }}</td>
								<td>{{ $row->fecha_inicio }}</td>
								<td>{{ $row->fecha_fin }}</td>
								<td>{{ $row->bloques_contratados }}</td>
								<td>{{ $row->bloques_disponibles }}</td>
								<td>{{ $row->estado }}</td>
								<td>{{ $row->observaciones }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Acciones
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="bi-pencil-square"></i> Editar </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Poliza id {{$row->id}}? \nDeleted Polizas cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="bi-trash3-fill"></i> Borrar </a></li>  
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
					<div class="float-end">{{ $polizas->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>