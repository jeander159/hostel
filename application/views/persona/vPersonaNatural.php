<div class="modal fade" id="modalRegistrarPersona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 class="box-title">Registro de Personas</h3>
            </div>
            <form class="form-horizontal" action="" method="POST" id="formRegistrarPersona">
              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2  control-label">Tipo de persona:</label>

                  <div class="col-sm-3">
                    <select name="cmbTipoPersona" id="cmbTipoPersona" class="form-control">
                      <option value="N">Persona Natural</option>
                      <option value="J">Persona Juridica</option>
                    </select>
                  </div>
                </div>
                <div class="form-group" id="contenedorDni">
                  <label for="cmbTipoDocumento" class="col-sm-2  control-label">Documento:</label>
                  <div class="col-sm-2">
                    <select name="cmbTipoDocumento" id="cmbTipoDocumento" class="form-control">
                    <option value="6">.::ELIJA::.</option>
                    <option value="1">DNI</option>
                    <option value="3">PASAPORTE</option>
                    <option value="4">CARNET DE EXTRANJERIA</option>
                    <option value="5">PARTIDA DE NACIMIENTO</option>
                  </select>
                  </div>
                  <label for="txtDniPersona" class="col-sm-1  control-label">Numero:</label>
                  <div class="col-sm-5">
                    <input type="text" name="txtDni" class="form-control" id="txtDniPersona" placeholder="Documento de Identidad" autocomplete="off">
                    <div id="registroDniPersona"></div>
                  </div>
                  <div class="col-sm-2">
                    <input class="btn btn-success  pull-left" type="button" value="Consultar Reniec" id="btnConsultarDniPersona">
                    <div id="mensaje"></div>
                    <div class="resultado"></div>

                  </div>
                </div>
                <div id="contenedorRuc" class="form-group">
                  <label for="" class="col-sm-2  control-label">RUC:</label>

                  <div class="col-sm-5">
                    <input type="hidden" value="2" name="txtRucPersona" id="txtRucPersona">
                    <input type="text" name="txtRuc" class="form-control" id="txtRuc" placeholder="Registro Único del COntribuyente" autocomplete="off">
                    <div id="registroRuc"></div>
                  </div>
                  <div class="col-sm-2">
                    <input class="btn btn-success  pull-left" type="button" value="Consultar Ruc" id="btnConsultarRuc">
                    <div id="mensaje"></div>
                    <div class="resultado"></div>

                  </div>
                </div>
                <div id="contenedorPersonaNatural">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Nombres:</label>

                  <div class="col-sm-10">
                    <input type="text" name="txtNombres" class="form-control" id="txtNombresPersona" placeholder="Nombre completo" autocomplete="false" style="text-transform: uppercase;">

                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Apellido Paterno</label>

                  <div class="col-sm-10">
                    <input type="text" name="txtApellidoPat" class="form-control" id="txtApellidoPatPersona" placeholder="Apellido Paterno" autocomplete="false" style="text-transform: uppercase;">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Apellido Materno</label>

                  <div class="col-sm-10">
                    <input type="text" name="txtApellidoMat" class="form-control" id="txtApellidoMatPersona" placeholder="Apellido Materno" autocomplete="false" style="text-transform: uppercase;">
                  </div>
                </div>
                <div class="form-group">
                  <label for="cmbSexoPersona" class="col-sm-2 control-label">Sexo:</label>
                  <div class="col-sm-2">
                    <select name="cmbSexoPersona" id="cmbSexoPersona" class="form-control">
                    <option value="0">.::ELIJA::.</option>
                    <option value="M">MASCULINO</option>
                    <option value="F">FEMENINO</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="cmbEstadoCivil" class="col-sm-2 control-label">Estado Civil:</label>

                  <div class="col-sm-2">
                    <select name="cmbEstadoCivil" id="cmbEstadoCivil" class="form-control">
                    <option value="5 ">.::ELIJA::.</option>
                    <option value="1">SOLTERO</option>
                    <option value="2">CASADO</option>
                    <option value="3">VIUDO</option>
                    <option value="3">DIVORCIADO</option>
                    <option value="3">CONVIVIENTE</option>
                    <option value="3">NO ESPECIFICA</option>
                  </select>
                  </div>
                </div> 
                </div>
                <div id="contenedorPersonaJuridica" class="form-group">
                  <label for="txtRazonSocial" class="col-sm-2 control-label">Razon Social:</label>
                  <div class="col-sm-10">
                    <input type="text" name="txtRazonSocial" class="form-control" id="txtRazonSocial" placeholder="Nombre de la Persona Juridica">
                  </div>
                </div>
                              
              </div>
              <div id="mensajePersona" class="text-center">
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" id="btnRegistrarPersonaNatural">Registrar Persona Natural</button>
                <button type="submit" class="btn btn-info pull-right" id="btnRegistrarPersonaJuridica">Registrar Persona Juridica</button>
              </div>
              
              <!-- /.box-footer -->
            </form>
          </div>
        </div> 
</div>
