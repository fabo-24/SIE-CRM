<!-- Create Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true"x-data="{ activeTab: 'seccion1' }">  <div class="modal-dialog modal-lg custom-modal-width" role="document">
    <form wire:submit.prevent="store">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createDataModalLabel">Registro de contribuyentes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click.prevent="cancel()" aria-label="Close"></button>
        </div>
        <div class="modal-body">
				<form>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="seccion1-tab" data-bs-toggle="tab" data-bs-target="#seccion1" type="button" role="tab" aria-controls="seccion1" aria-selected="true">Datos del Contribuyente</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="seccion2-tab" data-bs-toggle="tab" data-bs-target="#seccion2" type="button" role="tab" aria-controls="seccion2" aria-selected="false">CIEC & Contraseñas de timbrado</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seccion3-tab" data-bs-toggle="tab" data-bs-target="#seccion3" type="button" role="tab" aria-controls="seccion3" aria-selected="false">CDS/FIEL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seccion4-tab" data-bs-toggle="tab" data-bs-target="#seccion4" type="button" role="tab" aria-controls="seccion4" aria-selected="false">IMSS/IDSE</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seccion5-tab" data-bs-toggle="tab" data-bs-target="#seccion5" type="button" role="tab" aria-controls="seccion5" aria-selected="false">Sipare</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seccion6-tab" data-bs-toggle="tab" data-bs-target="#seccion6" type="button" role="tab" aria-controls="seccion6" aria-selected="false">Infonavit</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seccion7-tab" data-bs-toggle="tab" data-bs-target="#seccion7" type="button" role="tab" aria-controls="seccion7" aria-selected="false">Citas JAL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seccion8-tab" data-bs-toggle="tab" data-bs-target="#seccion8" type="button" role="tab" aria-controls="seccion8" aria-selected="false">SAS</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seccion9-tab" data-bs-toggle="tab" data-bs-target="#seccion9" type="button" role="tab" aria-controls="seccion9" aria-selected="false">Accesos CONTPAQi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seccion10-tab" data-bs-toggle="tab" data-bs-target="#seccion10" type="button" role="tab" aria-controls="seccion10" aria-selected="false">Anotaciones</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="seccion1" role="tabpanel" aria-labelledby="seccion1-tab">
                            <div class="row">
                                <br>
                                <h4>Datos del Contribuyente</h4>
                                <!-- SECCION 1 CONTENT -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Nombre"></label>
                                            <h6>Nombre</h6>
                                            <input wire:model="Nombre" type="text" class="form-control" id="Nombre" placeholder="Nombre">@error('Nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="RFC"></label>
                                            <h6>RFC</h6>
                                            <input wire:model="RFC" type="text" class="form-control" id="RFC" placeholder="XXX000000XXX">@error('RFC') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Telefono"></label>
                                            <h6>Telefono</h6>
                                            <input wire:model="Telefono" type="text" class="form-control" id="Telefono" placeholder="Telefono">@error('Telefono') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Email"></label>
                                            <h6>Correo Electrónico</h6>
                                            <input wire:model="Email" type="text" class="form-control" id="Email" placeholder="correo@email.com">@error('Email') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <!--<div class="col-md-3">
                                         <div class="form-group">
                                            <label for="Email"></label>
                                            <h6>Contraseña Correo Electrónico</h6>
                                            <input wire:model="Email" type="text" class="form-control" id="Email" placeholder="correo@email.com">@error('Email') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div> 
                                    </div> -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Regimen"></label>
                                            <h6>Régimen fiscal</h6>
                                            <select wire:model.defer="Regimen" class="form-control" id="Regimen">
                                                <option value="">— selecciona —</option>
                                                <option value="1">605 - SUELDOS Y SALARIOS</option>
                                                <option value="2">612 - PERSONAS FÍSICAS CON ACTIVIDADES EMPRESARIALES</option>
                                                <option value="3">621 - INCORPORACIÓN FISCAL RIF</option>
                                                <option value="4">626 - RESICO</option>
                                                <option value="5">630 - ENAJENACIÓN ACCIONES BOLSA DE VALORES</option>
                                                <option value="6">603 - PERSONAS MORALES CON FINES NO LUCRATIVOS</option>
                                                <option value="7">625 - PERSONA FÍSICA DE PLATAFORMAS DIGITALES</option>
                                                <option value="8">601 - RÉGIMEN GENERAL DE LEY</option>
                                                <option value="9">611 - INGRESOS POR DIVIDENDOS (SOCIOS Y ACCIONISTAS)</option>
                                            </select>
                                            @error('Regimen') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seccion2" role="tabpanel" aria-labelledby="seccion2-tab">
                            <br>
                            <h4>CIEC & Contraseñas</h4>
                            <!-- SECCION 2 CONTENT -->
                            <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Factura_contraseña"></label>
                                            <h6>Contraseña timbrado de factura</h6>
                                            <input wire:model="Factura_contraseña" type="text" class="form-control" id="Factura_contraseña" placeholder="Factura Contraseña">@error('Factura_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Nomina_contraseña"></label>
                                            <h6>Contraseña timbrado de nóminas</h6>
                                            <input wire:model="Nomina_contraseña" type="text" class="form-control" id="Nomina_contraseña" placeholder="Nomina Contraseña">@error('Nomina_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Ciec_contraseña"></label>
                                            <h6>Contraseña CIEC</h6>
                                            <input wire:model="Ciec_contraseña" type="text" class="form-control" id="Ciec_contraseña" placeholder="Ciec Contraseña">@error('Ciec_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="seccion3" role="tabpanel" aria-labelledby="seccion3-tab">
                            <br>
                            <h4>Datos del Certificado</h4>
                            <!-- SECCION 3 CONTENT -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Contraseña_CSD"></label>
                                        <h6>Contraseña del CSD</h6>
                                        <input wire:model="Contraseña_CSD" type="text" class="form-control" id="Contraseña_CSD" placeholder="Contraseña_CSD">@error('Contraseña_CSD') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <label for="Vencimiento_CSD"></label>
                                    <h6>Facha de Vencimiento CSD</h6>
                                    <input wire:model="Vencimiento_CSD" type="date" class="form-control" id="Vencimiento_CSD" placeholder="Vencimiento Csd">@error('Vencimiento_CSD') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Fiel_contraseña"></label>
                                        <h6>Contraseña de la Fiel</h6>
                                        <input wire:model="Fiel_contraseña" type="text" class="form-control" id="Fiel_contraseña" placeholder="Fiel Contraseña">@error('Fiel_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Vencimiento_fiel"></label>
                                        <h6>Fecha de vencimiento de la Fiel</h6>
                                        <input wire:model="Vencimiento_fiel" type="date" class="form-control" id="Vencimiento_fiel" placeholder="Vencimiento Fiel">@error('Vencimiento_fiel') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seccion4" role="tabpanel" aria-labelledby="seccion4-tab">
                            <br>
                            <h4>Datos del IMSS/IDSE</h4>
                            <!-- SECCION 4 CONTENT -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Ev_imss_usuario"></label>
                                        <h6>Usuario del EV IMSS</h6>
                                        <input wire:model="Ev_imss_usuario" type="text" class="form-control" id="Ev_imss_usuario" placeholder="Ev Imss Usuario">@error('Ev_imss_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Ev_imss_contraseña"></label>
                                        <h6>Contraseña del EV IMSS</h6>
                                        <input wire:model="Ev_imss_contraseña" type="text" class="form-control" id="Ev_imss_contraseña" placeholder="Ev Imss Contraseña">@error('Ev_imss_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Idse_usuario"></label>
                                        <h6>Usuario del IDSE</h6>
                                        <input wire:model="Idse_usuario" type="text" class="form-control" id="Idse_usuario" placeholder="Idse Usuario">@error('Idse_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Idse_contraseña"></label>
                                        <h6>Contraseña del IDSE</h6>
                                        <input wire:model="Idse_contraseña" type="text" class="form-control" id="Idse_contraseña" placeholder="Idse Contraseña">@error('Idse_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Idse_ingreso"></label>
                                        <h6>Metodo de ingreso IDSE</h6>
                                        <select wire:model="Idse_ingreso" class="form-control" id="Idse_ingreso">
                                            <option value="">Metodo de ingreso</option>
                                            <option value="Usuario IMSS">Usuario IMSS</option>
                                            <option value="FIEL">FIEL</option>
                                        </select>
                                        @error('Idse_ingreso') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>                               
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seccion5" role="tabpanel" aria-labelledby="seccion5-tab">
                            <h4>Datos del Sipare</h4>
                            <!-- SECCION 5 CONTENT -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Sipare_usuario"></label>
                                        <h6>Usuario Sipare</h6>
                                        <input wire:model="Sipare_usuario" type="text" class="form-control" id="Sipare_usuario" placeholder="Sipare Usuario">@error('Sipare_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Sipare_contraseña"></label>
                                        <h6>Contraseña Sipare</h6>
                                        <input wire:model="Sipare_contraseña" type="text" class="form-control" id="Sipare_contraseña" placeholder="Sipare_contraseña">@error('Sipare_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seccion6" role="tabpanel" aria-labelledby="seccion6-tab">
                            <h4>Infonavit</h4>
                            <!-- SECCION 6 CONTENT -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Infonavit_usuario"></label>
                                        <h6>Usuario Infonavit</h6>
                                        <input wire:model="Infonavit_usuario" type="text" class="form-control" id="Infonavit_usuario" placeholder="Infonavit Usuario">@error('Infonavit_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Infonavit_contraseña"></label>
                                        <h6>Contraseña Infonavit</h6>
                                        <input wire:model="Infonavit_contraseña" type="text" class="form-control" id="Infonavit_contraseña" placeholder="Infonavit Contraseña">@error('Infonavit_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seccion7" role="tabpanel" aria-labelledby="seccion7-tab">
                            <h4>Citas JAL</h4>
                            <!-- SECCION 7 CONTENT -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Citas_jal_usuario"></label>
                                        <h6>Usuario Citas JAL</h6>
                                        <input wire:model="Citas_jal_usuario" type="text" class="form-control" id="Citas_jal_usuario" placeholder="Citas Jal Usuario">@error('Citas_jal_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                     <div class="form-group">
                                        <label for="Citas_jal_contraseña"></label>
                                        <h6>Contraseña para Citas Jal</h6>
                                        <input wire:model="Citas_jal_contraseña" type="text" class="form-control" id="Citas_jal_contraseña" placeholder="Citas Jal Contraseña">@error('Citas_jal_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seccion8" role="tabpanel" aria-labelledby="seccion8-tab">
                            <br>
                            <h4>SAS</h4>
                            <!-- SECCION 8 CONTENT -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Sas_usuario"></label>
                                        <h6>Usuario SAS</h6>
                                        <input wire:model="Sas_usuario" type="text" class="form-control" id="Sas_usuario" placeholder="Sas Usuario">@error('Sas_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Sas_contraseña"></label>
                                        <h6>Contraseña SAS</h6>
                                        <input wire:model="Sas_contraseña" type="text" class="form-control" id="Sas_contraseña" placeholder="Sas Contraseña">@error('Sas_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>    
                            </div>
                        </div>

                        <div class="tab-pane fade" id="seccion9" role="tabpanel" aria-labelledby="seccion9-tab">
                            <br>
                            <h4>Acesos CONTPAQI Nube</h4>
                            <!-- SECCION 9 CONTENT -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Colabora_contraseña"></label>
                                        <h6>Usuario CONTPAQi Nube</h6>
                                        <input wire:model="Colabora_usuario" type="text" class="form-control" id="Colabora_usuario" placeholder="Colabora Usuario">@error('Colabora_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Sas_contraseña"></label>
                                        <h6>Contraseña CONTPAQi Nube</h6>
                                        <input wire:model="Colabora_contraseña" type="text" class="form-control" id="Colabora_contraseña" placeholder="Colabora Contraseña">@error('Colabora_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>    
                            </div>
                        </div>


                        <div class="tab-pane fade" id="seccion10" role="tabpanel" aria-labelledby="seccion10-tab">
                            <br>
                            <h4>Anotaciones</h4>
                            <!-- SECCION 9 CONTENT -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="Extra"></label>
                                            <h6>Comentarios/Anotaciones Extras</h6>
                                            <textarea wire:model="Extra" class="form-control" id="Extra" placeholder="Extra" rows="5"></textarea>
                                            @error('Extra') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" wire:click.prevent="cancel()" data-bs-dismiss="modal">Cerrar</button>
                 <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateDataModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg custom-modal-width" role="document">
    <form wire:submit.prevent="update">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateDataModalLabel">Actualizar Contribuyente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click.prevent="cancel()" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="hidden" wire:model="selected_id">
            <ul class="nav nav-tabs" id="updateTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="update-seccion1-tab" data-bs-toggle="tab" data-bs-target="#update-seccion1" type="button" role="tab" aria-controls="update-seccion1" aria-selected="true">Datos del Contribuyente</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="update-seccion2-tab" data-bs-toggle="tab" data-bs-target="#update-seccion2" type="button" role="tab" aria-controls="update-seccion2" aria-selected="false">CIEC & Contraseñas de timbrado</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="update-seccion3-tab" data-bs-toggle="tab" data-bs-target="#update-seccion3" type="button" role="tab" aria-controls="update-seccion3" aria-selected="false">CDS/FIEL</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="update-seccion4-tab" data-bs-toggle="tab" data-bs-target="#update-seccion4" type="button" role="tab" aria-controls="update-seccion4" aria-selected="false">IMSS/IDSE</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="update-seccion5-tab" data-bs-toggle="tab" data-bs-target="#update-seccion5" type="button" role="tab" aria-controls="update-seccion5" aria-selected="false">Sipare</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="update-seccion6-tab" data-bs-toggle="tab" data-bs-target="#update-seccion6" type="button" role="tab" aria-controls="update-seccion6" aria-selected="false">Infonavit</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="update-seccion7-tab" data-bs-toggle="tab" data-bs-target="#update-seccion7" type="button" role="tab" aria-controls="update-seccion7" aria-selected="false">Citas JAL</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="update-seccion8-tab" data-bs-toggle="tab" data-bs-target="#update-seccion8" type="button" role="tab" aria-controls="update-seccion8" aria-selected="false">SAS</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="update-seccion9-tab" data-bs-toggle="tab" data-bs-target="#update-seccion9" type="button" role="tab" aria-controls="update-seccion9" aria-selected="false">Accesos CONTPAQi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="update-seccion10-tab" data-bs-toggle="tab" data-bs-target="#update-seccion10" type="button" role="tab" aria-controls="update-seccion10" aria-selected="false">Anotaciones</button>
                </li>
            </ul>
            <div class="tab-content" id="updateTabContent">
                <!-- Sección 1 -->
                <div class="tab-pane fade show active" id="update-seccion1" role="tabpanel" aria-labelledby="update-seccion1-tab">
                    <div class="row">
                        <h4>Datos del Contribuyente</h4>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Nombre"></label>
                                <h6>Nombre</h6>
                                <input wire:model="Nombre" type="text" class="form-control" id="Nombre" placeholder="Nombre">@error('Nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="RFC"></label>
                                <h6>RFC</h6>
                                <input wire:model="RFC" type="text" class="form-control" id="RFC" placeholder="XXX000000XXX">@error('RFC') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Telefono"></label>
                                <h6>Telefono</h6>
                                <input wire:model="Telefono" type="text" class="form-control" id="Telefono" placeholder="Telefono">@error('Telefono') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Email"></label>
                                <h6>Correo Electrónico</h6>
                                <input wire:model="Email" type="text" class="form-control" id="Email" placeholder="correo@email.com">@error('Email') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            <div class="form-group">
                                <label for="Email_password"></label>
                                <h6>Contraseña Correo Electrónico</h6>
                                <input wire:model="Email_password" type="text" class="form-control" id="Email_password" placeholder="Contraseña Correo">@error('Email_password') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div> -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Regimen"></label>
                                <h6>Régimen fiscal</h6>
                                <select wire:model.defer="Regimen" class="form-control" id="Regimen">
                                    <option value="">— selecciona —</option>
                                    <option value="1">605 - SUELDOS Y SALARIOS</option>
                                    <option value="2">612 - PERSONAS FÍSICAS CON ACTIVIDADES EMPRESARIALES</option>
                                    <option value="3">621 - INCORPORACIÓN FISCAL RIF</option>
                                    <option value="4">626 - RESICO</option>
                                    <option value="5">630 - ENAJENACIÓN ACCIONES BOLSA DE VALORES</option>
                                    <option value="6">603 - PERSONAS MORALES CON FINES NO LUCRATIVOS</option>
                                    <option value="7">625 - PERSONA FÍSICA DE PLATAFORMAS DIGITALES</option>
                                    <option value="8">601 - RÉGIMEN GENERAL DE LEY</option>
                                    <option value="9">611 - INGRESOS POR DIVIDENDOS (SOCIOS Y ACCIONISTAS)</option>
                                </select>
                                @error('Regimen') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sección 2 -->
                <div class="tab-pane fade" id="update-seccion2" role="tabpanel" aria-labelledby="update-seccion2-tab">
                    <h4>CIEC & Contraseñas</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Factura_contraseña"></label>
                                <h6>Contraseña timbrado de factura</h6>
                                <input wire:model="Factura_contraseña" type="text" class="form-control" id="Factura_contraseña" placeholder="Factura Contraseña">@error('Factura_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Nomina_contraseña"></label>
                                <h6>Contraseña timbrado de nóminas</h6>
                                <input wire:model="Nomina_contraseña" type="text" class="form-control" id="Nomina_contraseña" placeholder="Nomina Contraseña">@error('Nomina_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Ciec_contraseña"></label>
                                <h6>Contraseña CIEC</h6>
                                <input wire:model="Ciec_contraseña" type="text" class="form-control" id="Ciec_contraseña" placeholder="Ciec Contraseña">@error('Ciec_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sección 3 -->
                <div class="tab-pane fade" id="update-seccion3" role="tabpanel" aria-labelledby="update-seccion3-tab">
                    <h4>Datos del Certificado</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Contraseña_CSD"></label>
                                <h6>Contraseña del CSD</h6>
                                <input wire:model="Contraseña_CSD" type="date" class="form-control" id="Contraseña_CSD" placeholder="Contraseña_CSD">@error('Contraseña_CSD') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Vencimiento_CSD"></label>
                                <h6>Fecha de Vencimiento CSD</h6>
                                <input wire:model="Vencimiento_CSD" type="date" class="form-control" id="Vencimiento_CSD" placeholder="Vencimiento Csd">@error('Vencimiento_CSD') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Fiel_contraseña"></label>
                                <h6>Contraseña de la Fiel</h6>
                                <input wire:model="Fiel_contraseña" type="text" class="form-control" id="Fiel_contraseña" placeholder="Fiel Contraseña">@error('Fiel_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Vencimiento_fiel"></label>
                                <h6>Fecha de vencimiento de la Fiel</h6>
                                <input wire:model="Vencimiento_fiel" type="date" class="form-control" id="Vencimiento_fiel" placeholder="Vencimiento Fiel">@error('Vencimiento_fiel') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sección 4 -->
                <div class="tab-pane fade" id="update-seccion4" role="tabpanel" aria-labelledby="update-seccion4-tab">
                    <h4>Datos del IMSS/IDSE</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Ev_imss_usuario"></label>
                                <h6>Usuario del EV IMSS</h6>
                                <input wire:model="Ev_imss_usuario" type="text" class="form-control" id="Ev_imss_usuario" placeholder="Ev Imss Usuario">@error('Ev_imss_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Ev_imss_contraseña"></label>
                                <h6>Contraseña del EV IMSS</h6>
                                <input wire:model="Ev_imss_contraseña" type="text" class="form-control" id="Ev_imss_contraseña" placeholder="Ev Imss Contraseña">@error('Ev_imss_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Idse_usuario"></label>
                                <h6>Usuario del IDSE</h6>
                                <input wire:model="Idse_usuario" type="text" class="form-control" id="Idse_usuario" placeholder="Idse Usuario">@error('Idse_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Idse_contraseña"></label>
                                <h6>Contraseña del IDSE</h6>
                                <input wire:model="Idse_contraseña" type="text" class="form-control" id="Idse_contraseña" placeholder="Idse Contraseña">@error('Idse_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Idse_ingreso"></label>
                                <h6>Método de ingreso IDSE</h6>
                                <select wire:model="Idse_ingreso" class="form-control" id="Idse_ingreso">
                                    <option value="">Metodo de ingreso</option>
                                    <option value="Usuario IMSS">Usuario IMSS</option>
                                    <option value="FIEL">FIEL</option>
                                </select>
                                @error('Idse_ingreso') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sección 5 -->
                <div class="tab-pane fade" id="update-seccion5" role="tabpanel" aria-labelledby="update-seccion5-tab">
                    <h4>Datos del Sipare</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Sipare_usuario"></label>
                                <h6>Usuario Sipare</h6>
                                <input wire:model="Sipare_usuario" type="text" class="form-control" id="Sipare_usuario" placeholder="Sipare Usuario">@error('Sipare_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Sipare_contraseña"></label>
                                <h6>Contraseña Sipare</h6>
                                <input wire:model="Sipare_contraseña" type="text" class="form-control" id="Sipare_contraseña" placeholder="Sipare Contraseña">@error('Sipare_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sección 6 -->
                <div class="tab-pane fade" id="update-seccion6" role="tabpanel" aria-labelledby="update-seccion6-tab">
                    <h4>Infonavit</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Infonavit_usuario"></label>
                                <h6>Usuario Infonavit</h6>
                                <input wire:model="Infonavit_usuario" type="text" class="form-control" id="Infonavit_usuario" placeholder="Infonavit Usuario">@error('Infonavit_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Infonavit_contraseña"></label>
                                <h6>Contraseña Infonavit</h6>
                                <input wire:model="Infonavit_contraseña" type="text" class="form-control" id="Infonavit_contraseña" placeholder="Infonavit Contraseña">@error('Infonavit_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sección 7 -->
                <div class="tab-pane fade" id="update-seccion7" role="tabpanel" aria-labelledby="update-seccion7-tab">
                    <h4>Citas JAL</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Citas_jal_usuario"></label>
                                <h6>Usuario Citas JAL</h6>
                                <input wire:model="Citas_jal_usuario" type="text" class="form-control" id="Citas_jal_usuario" placeholder="Citas Jal Usuario">@error('Citas_jal_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Citas_jal_contraseña"></label>
                                <h6>Contraseña para Citas Jal</h6>
                                <input wire:model="Citas_jal_contraseña" type="text" class="form-control" id="Citas_jal_contraseña" placeholder="Citas Jal Contraseña">@error('Citas_jal_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sección 8 -->
                <div class="tab-pane fade" id="update-seccion8" role="tabpanel" aria-labelledby="update-seccion8-tab">
                    <br>
                    <h4>SAS</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Sas_usuario"></label>
                                <h6>Usuario SAS</h6>
                                <input wire:model="Sas_usuario" type="text" class="form-control" id="Sas_usuario" placeholder="Sas Usuario">@error('Sas_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Sas_contraseña"></label>
                                <h6>Contraseña SAS</h6>
                                <input wire:model="Sas_contraseña" type="text" class="form-control" id="Sas_contraseña" placeholder="Sas Contraseña">@error('Sas_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sección 9 -->
                <div class="tab-pane fade" id="update-seccion9" role="tabpanel" aria-labelledby="update-seccion9-tab">
                    <br>
                    <h4>Acesos CONTPAQI Nube</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Colabora_usuario"></label>
                                <h6>Usuario CONTPAQi Nube</h6>
                                <input wire:model="Colabora_usuario" type="text" class="form-control" id="Colabora_usuario" placeholder="Colabora Usuario">@error('Colabora_usuario') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Colabora_contraseña"></label>
                                <h6>Contraseña CONTPAQi Nube</h6>
                                <input wire:model="Colabora_contraseña" type="text" class="form-control" id="Colabora_contraseña" placeholder="Colabora Contraseña">@error('Colabora_contraseña') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sección 10 -->
                <div class="tab-pane fade" id="update-seccion10" role="tabpanel" aria-labelledby="update-seccion10-tab">
                    <br>
                    <h4>Anotaciones</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Extra"></label>
                                <h6>Comentarios/Anotaciones Extras</h6>
                                <textarea wire:model="Extra" class="form-control" id="Extra" placeholder="Extra" rows="5"></textarea>
                                @error('Extra') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" wire:click.prevent="cancel()" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Guardar</button>
        </div>
       </div>
    </div>
</div>

<style>
/* Add this CSS */
.custom-modal-width {
    max-width: 80vw !important;
    
}
</style>

<!-- Agrega esto al final de tu archivo, antes del cierre de </body> o después de los modals -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Para el modal de creación
    let createTabKey = 'contribuyente-create-tab';
    let $createModal = document.getElementById('createDataModal');
    let $createTab = document.getElementById('myTab');

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
    let updateTabKey = 'contribuyente-update-tab';
    let $updateModal = document.getElementById('updateDataModal');
    let $updateTab = document.getElementById('updateTab');

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
        let createTabKey = 'contribuyente-create-tab';
        let activeCreateTab = localStorage.getItem(createTabKey);
        if (activeCreateTab) {
            let tab = document.getElementById(activeCreateTab);
            if (tab) {
                new bootstrap.Tab(tab).show();
            }
        }
        // Restaurar tab activo del modal de edición
        let updateTabKey = 'contribuyente-update-tab';
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
