@section('title', __('Clientes'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="bi-house-check-fill text-info"></i>
							Clientes </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Clientes">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="bi-plus-lg"></i>  Añadir Clientes
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.clientes.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Razonsocial</th>
								<th>Contacto</th>
								<th>Numero</th>
								<th>Whatsapp</th>
								<th>Correo</th>
								<th>Contacto2</th>
								<th>Numero2</th>
								<th>Observacion</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($clientes as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->RazonSocial }}</td>
								<td>{{ $row->Contacto }}</td>
								<td>{{ $row->Numero }}</td>
								<td>{{ $row->WhatsApp }}</td>
								<td>{{ $row->Correo }}</td>
								<td>{{ $row->Contacto2 }}</td>
								<td>{{ $row->Numero2 }}</td>
								<td>{{ $row->Observacion }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Acciones
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="bi-pencil-square"></i> Editar </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Cliente id {{$row->id}}? \nDeleted Clientes cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="bi-trash3-fill"></i> Borrar </a></li>  
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
					<div class="float-end">{{ $clientes->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>