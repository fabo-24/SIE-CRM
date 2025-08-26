@section('title', __('Upolizas'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="bi-house-check-fill text-info"></i>
							Uso polizas  </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Upolizas">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="bi-plus-lg"></i>  Añadir Upolizas
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.upolizas.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Poliza Id</th>
								<th>Fecha</th>
								<th>Inicio</th>
								<th>Fin</th>
								<th>Duracion</th>
								<th>Ajuste</th>
								<th>Caso</th>
								<th>Bloques Consumidos</th>
								<th>Descuento</th>
								<th>Atendio</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($upolizas as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->poliza_id }}</td>
								<td>{{ $row->fecha }}</td>
								<td>{{ $row->inicio }}</td>
								<td>{{ $row->fin }}</td>
								<td>{{ $row->duracion }}</td>
								<td>{{ $row->ajuste }}</td>
								<td>{{ $row->caso }}</td>
								<td>{{ $row->bloques_consumidos }}</td>
								<td>{{ $row->descuento }}</td>
								<td>{{ $row->atendio }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Acciones
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="bi-pencil-square"></i> Editar </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Upoliza id {{$row->id}}? \nDeleted Upolizas cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="bi-trash3-fill"></i> Borrar </a></li>  
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
					<div class="float-end">{{ $upolizas->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>