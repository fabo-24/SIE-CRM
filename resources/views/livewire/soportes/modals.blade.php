<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createDataModalLabel">Crear un servicio de soporte</h5>
                    <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="soporteTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Fechas y Horas</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">Datos Generales</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Detalles Técnicos</button>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content" id="soporteTabContent">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                            <div class="form-group mt-3">
                                <label for="Fecha_ini"></label>
                                <input wire:model="Fecha_ini" type="text" class="form-control" id="Fecha_ini" placeholder="Fecha Ini">@error('Fecha_ini') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Fecha_fin"></label>
                                <input wire:model="Fecha_fin" type="text" class="form-control" id="Fecha_fin" placeholder="Fecha Fin">@error('Fecha_fin') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Hora_ini"></label>
                                <input wire:model="Hora_ini" type="text" class="form-control" id="Hora_ini" placeholder="Hora Ini">@error('Hora_ini') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Hora_fin"></label>
                                <input wire:model="Hora_fin" type="text" class="form-control" id="Hora_fin" placeholder="Hora Fin">@error('Hora_fin') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Tiempo"></label>
                                <input wire:model="Tiempo" type="text" class="form-control" id="Tiempo" placeholder="Tiempo">@error('Tiempo') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="form-group mt-3">
                                <label for="Cliente"></label>
                                <input wire:model="Cliente" type="text" class="form-control" id="Cliente" placeholder="Cliente">@error('Cliente') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Asunto"></label>
                                <input wire:model="Asunto" type="text" class="form-control" id="Asunto" placeholder="Asunto">@error('Asunto') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Ejecutivo"></label>
                                <input wire:model="Ejecutivo" type="text" class="form-control" id="Ejecutivo" placeholder="Ejecutivo">@error('Ejecutivo') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Stat"></label>
                                <input wire:model="Stat" type="text" class="form-control" id="Stat" placeholder="Stat">@error('Stat') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Evidencia"></label>
                                <input wire:model="Evidencia" type="text" class="form-control" id="Evidencia" placeholder="Evidencia">@error('Evidencia') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="PostVenta"></label>
                                <input wire:model="PostVenta" type="text" class="form-control" id="PostVenta" placeholder="Postventa">@error('PostVenta') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                            <div class="form-group mt-3">
                                <label for="Sistema"></label>
                                <input wire:model="Sistema" type="text" class="form-control" id="Sistema" placeholder="Sistema">@error('Sistema') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Comentarios"></label>
                                <input wire:model="Comentarios" type="text" class="form-control" id="Comentarios" placeholder="Comentarios">@error('Comentarios') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="VersionSistem"></label>
                                <input wire:model="VersionSistem" type="text" class="form-control" id="VersionSistem" placeholder="Versionsistem">@error('VersionSistem') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="VersionWindows"></label>
                                <input wire:model="VersionWindows" type="text" class="form-control" id="VersionWindows" placeholder="Versionwindows">@error('VersionWindows') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="PaqueteriaOffice"></label>
                                <input wire:model="PaqueteriaOffice" type="text" class="form-control" id="PaqueteriaOffice" placeholder="Paqueteriaoffice">@error('PaqueteriaOffice') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Status"></label>
                                <input wire:model="Status" type="text" class="form-control" id="Status" placeholder="Status">@error('Status') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="store()" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update Soporte</h5>
                    <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" wire:model="selected_id">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="soporteUpdateTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="update-tab1-tab" data-bs-toggle="tab" data-bs-target="#update-tab1" type="button" role="tab" aria-controls="update-tab1" aria-selected="true">Fechas y Horas</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="update-tab2-tab" data-bs-toggle="tab" data-bs-target="#update-tab2" type="button" role="tab" aria-controls="update-tab2" aria-selected="false">Datos Generales</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="update-tab3-tab" data-bs-toggle="tab" data-bs-target="#update-tab3" type="button" role="tab" aria-controls="update-tab3" aria-selected="false">Detalles Técnicos</button>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content" id="soporteUpdateTabContent">
                        <div class="tab-pane fade show active" id="update-tab1" role="tabpanel" aria-labelledby="update-tab1-tab">
                            <div class="form-group mt-3">
                                <label for="Fecha_ini"></label>
                                <input wire:model="Fecha_ini" type="text" class="form-control" id="Fecha_ini" placeholder="Fecha Ini">@error('Fecha_ini') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Fecha_fin"></label>
                                <input wire:model="Fecha_fin" type="text" class="form-control" id="Fecha_fin" placeholder="Fecha Fin">@error('Fecha_fin') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Hora_ini"></label>
                                <input wire:model="Hora_ini" type="text" class="form-control" id="Hora_ini" placeholder="Hora Ini">@error('Hora_ini') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Hora_fin"></label>
                                <input wire:model="Hora_fin" type="text" class="form-control" id="Hora_fin" placeholder="Hora Fin">@error('Hora_fin') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Tiempo"></label>
                                <input wire:model="Tiempo" type="text" class="form-control" id="Tiempo" placeholder="Tiempo">@error('Tiempo') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="tab-pane fade" id="update-tab2" role="tabpanel" aria-labelledby="update-tab2-tab">
                            <div class="form-group mt-3">
                                <label for="Cliente"></label>
                                <input wire:model="Cliente" type="text" class="form-control" id="Cliente" placeholder="Cliente">@error('Cliente') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Asunto"></label>
                                <input wire:model="Asunto" type="text" class="form-control" id="Asunto" placeholder="Asunto">@error('Asunto') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Ejecutivo"></label>
                                <input wire:model="Ejecutivo" type="text" class="form-control" id="Ejecutivo" placeholder="Ejecutivo">@error('Ejecutivo') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Stat"></label>
                                <input wire:model="Stat" type="text" class="form-control" id="Stat" placeholder="Stat">@error('Stat') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Evidencia"></label>
                                <input wire:model="Evidencia" type="text" class="form-control" id="Evidencia" placeholder="Evidencia">@error('Evidencia') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="PostVenta"></label>
                                <input wire:model="PostVenta" type="text" class="form-control" id="PostVenta" placeholder="Postventa">@error('PostVenta') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="tab-pane fade" id="update-tab3" role="tabpanel" aria-labelledby="update-tab3-tab">
                            <div class="form-group mt-3">
                                <label for="Sistema"></label>
                                <input wire:model="Sistema" type="text" class="form-control" id="Sistema" placeholder="Sistema">@error('Sistema') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Comentarios"></label>
                                <input wire:model="Comentarios" type="text" class="form-control" id="Comentarios" placeholder="Comentarios">@error('Comentarios') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="VersionSistem"></label>
                                <input wire:model="VersionSistem" type="text" class="form-control" id="VersionSistem" placeholder="Versionsistem">@error('VersionSistem') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="VersionWindows"></label>
                                <input wire:model="VersionWindows" type="text" class="form-control" id="VersionWindows" placeholder="Versionwindows">@error('VersionWindows') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="PaqueteriaOffice"></label>
                                <input wire:model="PaqueteriaOffice" type="text" class="form-control" id="PaqueteriaOffice" placeholder="Paqueteriaoffice">@error('PaqueteriaOffice') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="Status"></label>
                                <input wire:model="Status" type="text" class="form-control" id="Status" placeholder="Status">@error('Status') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" wire:click.prevent="update()" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Para el modal de creación
    let createTabKey = 'soporte-create-tab';
    let $createModal = document.getElementById('createDataModal');
    let $createTab = document.getElementById('soporteTab');

    if ($createTab) {
        $createTab.querySelectorAll('button[data-bs-toggle="tab"]').forEach(function (tabBtn) {
            tabBtn.addEventListener('shown.bs.tab', function (e) {
                localStorage.setItem(createTabKey, e.target.id);
            });
        });
    }

    $createModal?.addEventListener('shown.bs.modal', function () {
        let activeTab = localStorage.getItem(createTabKey);
        if (activeTab) {
            let tab = document.getElementById(activeTab);
            if (tab) {
                new bootstrap.Tab(tab).show();
            }
        }
    });

    // Para el modal de edición
    let updateTabKey = 'soporte-update-tab';
    let $updateModal = document.getElementById('updateDataModal');
    let $updateTab = document.getElementById('soporteUpdateTab');

    if ($updateTab) {
        $updateTab.querySelectorAll('button[data-bs-toggle="tab"]').forEach(function (tabBtn) {
            tabBtn.addEventListener('shown.bs.tab', function (e) {
                localStorage.setItem(updateTabKey, e.target.id);
            });
        });
    }

    $updateModal?.addEventListener('shown.bs.modal', function () {
        let activeTab = localStorage.getItem(updateTabKey);
        if (activeTab) {
            let tab = document.getElementById(activeTab);
            if (tab) {
                new bootstrap.Tab(tab).show();
            }
        }
    });
});

document.addEventListener('livewire:load', function () {
    window.Livewire.hook('message.processed', (message, component) => {
        // Restaurar tab activo del modal de creación
        let createTabKey = 'soporte-create-tab';
        let activeCreateTab = localStorage.getItem(createTabKey);
        if (activeCreateTab) {
            let tab = document.getElementById(activeCreateTab);
            if (tab) {
                new bootstrap.Tab(tab).show();
            }
        }
        // Restaurar tab activo del modal de edición
        let updateTabKey = 'soporte-update-tab';
        let activeUpdateTab = localStorage.getItem(updateTabKey);
        if (activeUpdateTab) {
            let tab = document.getElementById(activeUpdateTab);
            if (tab) {
                new bootstrap.Tab(tab).show();
            }
        }
    });
});
</script>