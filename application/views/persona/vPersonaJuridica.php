<div class="modal fade" id="modalRegistrarPersonaJuridica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 class="box-title">Registro de Personas Juridicas</h3>
            </div>
            <form class="form-horizontal" action="" id="formRegistrarPersonaJuridica" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2  control-label">RUC:</label>

                  <div class="col-sm-7">
                    <input type="text" name="txtRuc" class="form-control" id="txtRucsd" placeholder="Documento de Identidad">
                    <div id="registroRuc"></div>
                  </div>
                  <div class="col-sm-2">
                    <input class="btn btn-success  pull-left" type="button" value="Consultar" id="btndsfConsultarRuc">
                    <div id="mensaje"></div>
                    <div class="resultado"></div>

                  </div>
                </div>
                <div class="form-group">
                  <label for="txtRazonSocial" class="col-sm-2 control-label">Razon Social:</label>

                  <div class="col-sm-10">
                    <input type="text" name="txtRazonSocial" class="form-control" id="txtRazonSo" placeholder="Nombre completo">
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtDireccion" class="col-sm-2 control-label">Dirección</label>

                  <div class="col-sm-10">
                    <input type="text" name="txtDireccion" class="form-control" id="txtDireccion" placeholder="Apellido Paterno">
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtTelefono" class="col-sm-2 control-label">Telefono</label>

                  <div class="col-sm-10">
                    <input type="text" name="txtTelefono" class="form-control" id="txtTelefono" placeholder="Apellido Materno">
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtCorreo" class="col-sm-2 control-label">Correo</label>

                  <div class="col-sm-10">
                    <input type="text" name="txtCorreo" class="form-control" id="txtCorreo" placeholder="direccion">
                  </div>
                </div>
                            
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" id="btnRegistrarPersonaJuridic" class="btn btn-info pull-right">Registrar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
</div>