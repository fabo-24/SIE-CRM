@section('title', __('Amenazas'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="bi-house-check-fill text-info"></i>
							Antivirus </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Amenazas">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="bi-plus-lg"></i>  Añadir Antivirus
						</div>
						<div class="d-flex gap-2 mb-3">
    <input type="date" wire:model="fechaInicio" class="form-control" placeholder="Fecha Inicio">
    <input type="date" wire:model="fechaFin" class="form-control" placeholder="Fecha Fin">
    <button class="btn btn-secondary" wire:click="limpiarFiltro">Limpiar</button>
</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.amenazas.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Antivitus</th>
								<th>Clienteant</th>
								<th>Fechacaducidad</th>
								<th>Equipos</th>
								<th>Licencias</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($amenazas as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->Antivitus }}</td>
								<td>{{ $row->ClienteAnt }}</td>
								<td>{{ $row->FechaCaducidad }}</td>
								<td>{{ $row->Equipos }}</td>
								<td>{{ $row->Licencias }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Acciones
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="bi-pencil-square"></i> Editar </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Amenaza id {{$row->id}}? \nDeleted Amenazas cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="bi-trash3-fill"></i> Borrar </a></li>  
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
					<div class="float-end">{{ $amenazas->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>