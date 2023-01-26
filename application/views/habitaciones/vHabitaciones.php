<script>
      var baseurl="<?php echo base_url(); ?>"; 
</script>
<div class="modal fade" id="modalRegistrarHabitaciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 class="box-title">Registro de Habitaciones</h3>
            </div>
            <form class="form-horizontal" action="" id="formRegistrarHabitaciones" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="txtNumHabita" class="col-sm-2  control-label">Número:</label>

                  <div class="col-sm-10">
                    <input type="text" name="txtNumHabit" class="form-control" id="txtNumHabita" placeholder="Numero de Habitacion">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Tipo:</label>

                  <div class="col-sm-10">
                    <select name="cmbTipoHabit" id="cmbTipoHabita" class="form-control">
                      <option value="SIMPLE">SIMPLE</option>
                      <option value="MATRIMONIAL">MATRIMONIAL</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtPrecioHabita" class="col-sm-2 control-label">Precio:</label>

                  <div class="col-sm-10">
                    <input type="text" name="txtPrecioHabit" class="form-control" id="txtPrecioHabita" placeholder="Precio de Habitacion">
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtDetHabit" class="col-sm-2 control-label">Detalles</label>

                  <div class="col-sm-10">
                    <input type="text" name="txtDetHabit" class="form-control" id="txtDetHabit" placeholder="Detalle de Habitacion">
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtPisoHabita" class="col-sm-2 control-label">Piso:</label>

                  <div class="col-sm-10">
                    <input type="text" name="txtPisoHabit" class="form-control" id="txtPisoHabita" placeholder="Piso de Habitacion">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Estado:</label>

                  <div class="col-sm-10">
                    <select name="cmbEstadoHabit" id="cmbEstadoHabita" class="form-control">
                      <option value="DISPONIBLE">DISPONIBLE</option>
                      <option value="OCUPADO">OCUPADO</option>
                      <option value="MANTENIMIENTO">MANTENIMIENTO</option>
                      <option value="PENDIENTE">PENDIENTE</option>
                    </select>
                  </div>
                </div>
                            
              </div>
              <div class="form-group">
                  <label for="txtPisoHabita" class="col-sm-2 control-label">Incluye:</label>

                  <div class="col-sm-10">
                    <div class="form-check form-check-inline col-sm-4">                     
                      <input class="form-check-input" type="checkbox" name="txtSH" id="txtSH" value="SS.HH.">
                      <label class="form-check-label" for="inlineCheckbox1">BAÑO</label>
                    </div>
                    <div class="form-check form-check-inline col-sm-4">
                      
                      <input class="form-check-input" type="checkbox" name="txtTV" id="txtTV" value="TV">
                      <label class="form-check-label" for="inlineCheckbox2">TELEVISIÓN</label>
                    </div>
                  </div>
                </div>
              <div id="mensajeHabitacion" class="text-center"></div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" id="btnRegistrarHabitaciones" class="btn btn-info pull-right">Registrar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
</div>
