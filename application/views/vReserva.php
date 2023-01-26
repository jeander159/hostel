
<script>
      var baseurl="<?php echo base_url(); ?>"; 
</script>

<div class="modal fade" id="modalReserva" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">RESERVA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form class="form-horizontal" action="" method="POST" id="formRegistrarReserva">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item active">
                  <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Huésped</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Habitación</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Pago</a>
                </li>

                <div class="col-md-4 mb-3 pull-right" style="position: fixed;top:0;right:0;">
                  <label for="cmbEstadoHabit">Estado:</label>
                  <select name="cmbEstadoHabit" id="cmbEstadoHabit" class="form-control" style="text-align:center;height:5em;width:12em;color:white;font-weight: bold">
                    <option value="DISPONIBLE" style="background:#00A65A;">DISPONIBLE</option>
                    <option value="OCUPADO" style="background:#DD4B39;">OCUPADO</option>
                    <option value="MANTENIMIENTO" style="background:#F39C12;">MANTENIMIENTO</option>
                    <option value="PENDIENTE" style="background:#00C0EF;">PENDIENTE</option>
                  </select>
                </div>
                
              </ul>
              <div class="box-body">
              <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      
                        <input type="hidden" name="txtIdHabit" id="txtIdHabit">
                        <div class="form-row">
                          <div class="col-md-8 mb-3">
                            <label for="">Nombre del cliente:</label>                        
                            <input type="hidden" id="txtIdUser" name="txtIdUser" value="<?php echo strtoupper($this->session->userdata('s_idUsuario')); ?>">
                            <input type="hidden" name="txtIdPersonaNatural" class="form-control" id="txtIdPersonaNatural"  value="" autocomplete="false">
                            <input type="text" name="txtNombrePersona" class="form-control" id="txtNombrePersona" placeholder="Buscar nombre de la Persona"  value="" autocomplete="off" autofocus required>
                            <div id="registrosPersona"></div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="">.</label><br>
                            <a href="" class="btn btn-success pull-right"  id="btnRegistrarPersona" data-toggle="modal" data-target="#modalRegistrarPersona" onclick=""> <i class="fa fa-user-plus"></i> Registrar Persona</a>                        
                          </div>  
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="txtProfesion">Profesión:</label>
                            <input type="text" name="txtProfesion" class="form-control" id="txtProfesion" placeholder="DIGITE UNA PROFESION"  value="" autocomplete="false" required style="text-transform: uppercase;">                                              
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="txtDestino">Destino:</label>
                            <input type="text" name="txtDestino" class="form-control" id="txtDestino" placeholder="DIGITE UN DESTINO"  value="" autocomplete="false" required style="text-transform: uppercase;">                                              
                          </div>
                          
                          <div class="col-md-4 mb-3">
                            <input type="hidden" name="txtIdPais" id="txtIdPais">
                            <label for="cmbPais">País:</label>
                            <input type="text" class="form-control" name="cmbPais" id="cmbPais" placeholder="Busque el País" autocomplete="off" required>
                            <div id="registroPaises"></div>                  
                          </div>

                          <div class="col-md-4 mb-3">
                            <label for="cmbRegion">Ciudad:</label>
                            <select name="cmbRegion" id="cmbRegion" class="form-control">
                              <option value="0">.::ELIJA::.</option>
                            </select>                    
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="txtNacionalidad">Nacionalidad:</label>
                            <input type="text" name="txtNacionalidad" id="txtNacionalidad" class="form-control" disabled>                  
                          </div>
                        </div>                      
                                              
                  </div>
                  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label for="txtNumHabit">Número:</label>
                          <input type="text" name="txtNumHabit" class="form-control" id="txtNumHabit" disabled>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="cmbTipoHabit">Tipo:</label>                          
                          <select name="cmbTipoHabit" id="cmbTipoHabit" class="form-control"  disabled>
                            <option value="SIMPLE">SIMPLE</option>
                            <option value="MATRIMONIAL">MATRIMONIAL</option>
                          </select>                        
                        </div>
                        
                        
                      </div>
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label for="txtPisoHabit">Piso:</label>                       
                          <input type="text" name="txtPisoHabit" class="form-control" id="txtPisoHabit" disabled>                     
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="txtPrecioHabit">Precio:</label>
                          <input type="text" name="txtPrecioHabit" class="form-control" id="txtPrecioHabit" disabled>    
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="txtPersonas" class="">Personas:</label>                        
                          <input type="number" name="txtPersonas" class="form-control" id="txtPersonas" placeholder="Numero de Personas" autocomplete="false" required>                        
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="txtHoraIngreso">Hora de Ingreso:</label>                            
                          <input type="time" name="txtHoraIngreso" class="form-control" id="txtHoraIngreso" value="">  
                        </div>
                      </div>
                      <div class="form-row">
                        
                        <div class="col-md-6 mb-3">
                          <label for="txtFechaIngreso">Fecha de Ingreso:</label>                            
                          <input type="date" name="txtFechaIngreso" class="form-control" id="txtFechaIngreso" placeholder="Fecha de Ingreso del Huesped" value="<?php echo date("Y-m-d"); ?>">  
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="txtFechaSalida">Fecha de Salida:</label>                           
                          <input type="date" name="txtFechaSalida" class="form-control" id="txtFechaSalida" placeholder="Fecha de Salida del Huesped" value="<?php echo date("Y-m-d"); ?>">  
                        </div>
                      </div>
                    
                  </div>
                  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                    <h4 class="box-title">Detalles de Pago</h4>
                      
                        <div class="form-row">
                          <div class="col-md-8 mb-3">
                            <label for="txtConcepto">Motivo Principal del Viaje:</label>
                            <input type="text" name="txtConcepto" class="form-control" id="txtConcepto" placeholder="Descripcion del Pago" autocomplete="false" required>
                            <div id="registroMotivo"></div>
                            <input type="hidden" name="txtIdMotivo" id="txtIdMotivo" >
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="txtMonto">Monto Pagado:</label>                        
                            <input type="text" name="txtMonto" class="form-control" id="txtMonto" placeholder="Monto que esta pagando el cliente" autocomplete="false">                        
                          </div>   
                        </div>
                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="txtFechaPago">Fecha de Pago:</label>
                            <input type="date" name="txtFechaPago" class="form-control" id="txtFechaPago" placeholder="Fecha del Pago" value="<?php echo date("Y-m-d"); ?>">                        
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="txtDescuento">Descuento:</label>
                            <input type="text" name="txtDescuento" class="form-control" id="txtDescuento" placeholder="Descuento" value="0" autocomplete="false">                     
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="txtMontoTotal">Total:</label>
                            <input type="text" name="txtMontoTotal" class="form-control" id="txtMontoTotal" placeholder="Total a cobrar" autocomplete="false" required>                     
                          </div>
                        </div>                      
                      
                  </div>
                </div>
              </div>
                        <!-- /.box-footer -->
                <div id="mensajeReserva" class="text-center text-success"></div>
       </form>     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btnRegistrarReserva">Reservar</button>
      </div>
    </div>
  </div>
</div>
