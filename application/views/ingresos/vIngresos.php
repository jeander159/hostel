<div class="modal fade " id="modalRegistrarIngresos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 class="box-title">Registro de Ventas</h3>
            </div>
            <form class="form-horizontal" action="" id="formRegistrarIngresos" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="cmbTipoIngresos" class="col-sm-2 control-label">Tipo:</label>

                  <div class="col-sm-10">
                    <select name="cmbTipoIngresos" id="cmbTipoIngresos" class="form-control">
                      
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtDescripcionIngresos" class="col-sm-2 control-label">Descripcion:</label>

                  <div class="col-sm-10">
                    <input type="text" name="txtDescripcionIngresos" class="form-control" id="txtDescripcionIngresos" placeholder="Ingrese descripcion del producto">
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtMontoIngresos" class="col-sm-2 control-label">Monto:</label>

                  <div class="col-sm-10">
                    <input type="text" name="txtMontoIngresos" class="form-control" id="txtMontoIngresos" placeholder="Ingrese monto de la venta">
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtCantidadIngresos" class="col-sm-2 control-label">Cantidad:</label>

                  <div class="col-sm-10">
                    <input type="number" name="txtCantidadIngresos" class="form-control" id="txtCantidadIngresos" placeholder="Ingrese monto de la venta">
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtFechaIngresos" class="col-sm-2 control-label">Fecha:</label>

                  <div class="col-sm-10">
                    <input type="date" name="txtFechaIngresos" class="form-control" id="txtFechaIngresos" value="<?php echo date("Y-m-d"); ?>">
                  </div>
                </div>
                
                            
              </div>
              
              <div id="mensajeIngresos" class="text-center"></div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" id="btnRegistrarIngresos" class="btn btn-info pull-right">Registrar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
</div>
