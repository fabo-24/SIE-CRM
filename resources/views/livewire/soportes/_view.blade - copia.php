@section('title', __('Soportes'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="bi-house-check-fill text-info"></i>
							Soportes  </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Soportes">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="bi-plus-lg"></i>  Añadir Soportes
						</div>
						<div style="display: flex; gap: 10px; align-items: center; flex-wrap: wrap;">
						    <input wire:model="searchFechaInicio" type="date" class="form-control" placeholder="Fecha inicio">
						    <input wire:model="searchFechaFin" type="date" class="form-control" placeholder="Fecha fin">
						
						    <button wire:click="$refresh" class="btn btn-sm btn-primary">
						        <i class="bi-search"></i> Buscar
						    </button>
						
						    <button wire:click="limpiarFiltroFechas" class="btn btn-sm btn-secondary">
						        <i class="bi-x-circle"></i> Limpiar
						    </button>
						</div>

					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.soportes.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Fecha Ini</th>
								<th>Fecha Fin</th>
								<th>Hora Ini</th>
								<th>Hora Fin</th>
								<th>Tiempo</th>
								<th>Cliente</th>
								<th>Asunto</th>
								<th>Ejecutivo</th>
								<th>Stat</th>
								<th>Evidencia</th>
								<th>Postventa</th>
								<th>Sistema</th>
								<th>Comentarios</th>
								<th>Versionsistem</th>
								<th>Versionwindows</th>
								<th>Paqueteriaoffice</th>
								<th>Status</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($soportes as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->Fecha_ini }}</td>
								<td>{{ $row->Fecha_fin }}</td>
								<td>{{ $row->Hora_ini }}</td>
								<td>{{ $row->Hora_fin }}</td>
								<td>{{ $row->Tiempo }}</td>
								<td>{{ $row->Cliente }}</td>
								<td>{{ $row->Asunto }}</td>
								<td>{{ $row->Ejecutivo }}</td>
								<td>{{ $row->Stat }}</td>
								<td>{{ $row->Evidencia }}</td>
								<td>{{ $row->PostVenta }}</td>
								<td>{{ $row->Sistema }}</td>
								<td>{{ $row->Comentarios }}</td>
								<td>{{ $row->VersionSistem }}</td>
								<td>{{ $row->VersionWindows }}</td>
								<td>{{ $row->PaqueteriaOffice }}</td>
								<td>{{ $row->Status }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Acciones
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="bi-pencil-square"></i> Editar </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Soporte id {{$row->id}}? \nDeleted Soportes cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="bi-trash3-fill"></i> Borrar </a></li>  
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
					<div class="float-end">{{ $soportes->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>