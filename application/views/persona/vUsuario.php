<script>
    var baseurl="<?php echo base_url(); ?>";
</script>
<div class="modal fade" id="modalUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 class="box-title">Registro de Usuarios</h3>
            </div>
            <form class="form-horizontal" action="" id="formRegistrarUsuarios" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-1  control-label">Documento:</label>
                  
                  <div class="col-sm-3">
                    <input type="text" name="txtDni" class="form-control" id="txtDni" placeholder="Documento de Identidad" required autocomplete="off" disabled>
                    <div id="registroDni"></div>
                  </div>
                  <label for="" class="col-sm-1 control-label">Nombres:</label>

                  <div class="col-sm-4">
                    <input type="text" name="txtNombres" class="form-control" id="txtNombres" placeholder="BUSQUE A LA PERSONA POR SU NOMBRE" autocomplete="off" required>
                    <input type="hidden" name="txtIdPersona" id="txtIdPersona">
                    <div id="registroNombres"></div>
                  </div>
                  <div id="prueba"></div>
                  <div class="col-sm-3">
                    <a href="" data-toggle="modal" data-target="#modalRegistrarPersona" class="btn btn-info pull-right">Registrar Persona</a>
                    <div id="mensaje"></div>
                    <div class="resultado"></div>

                  </div>
                </div>
                <div class="form-group">
                  
                  <label for="cmbCargo" class="col-sm-1 control-label">Cargo:</label>

                  <div class="col-sm-3">
                    <select name="cmbCargo" id="cmbCargo" class="form-control">
                      <option value="0">.::ELIJA::.</option>
                    </select>
                  </div>
                  <label for="txtFoto" class="col-sm-2 control-label">Subir Foto:</label>

                  <div class="col-sm-5">
                    <input type="file" name="txtFoto" class="form-control" id="txtFoto" style="padding:0;">
                  </div>
                  
                </div>

                <div class="form-group">
                  <label for="txtTelefonou" class="col-sm-2 control-label">Telefono o Celular</label>

                  <div class="col-sm-3">
                    <input type="text" name="txtTelefono" class="form-control" id="txtTelefonou" placeholder="Telefono" required autocomplete="false">
                  </div>
                  <label for="" class="col-sm-2 control-label">Usuario</label>

                  <div class="col-sm-4">
                    <input type="text" name="txtUsuario" class="form-control" id="txtUsuario" placeholder="usuario" required autocomplete="false">
                  </div>
                  
                </div>
                
              
                <div class="form-group">
                  
                   <label for="txtPassword1" class="col-sm-2 control-label">Contraseña (*)</label>

                  <div class="col-sm-4">
                    <input type="password" name="txtClave1" class="form-control" id="txtPassword1" placeholder="Constraseña" required autocomplete="false">
                  </div>
                  <label for="txtPassword2" class="col-sm-2 control-label">Rep. Contraseña(*)</label>

                  <div class="col-sm-4">
                    <input type="password" name="txtClave2" class="form-control" id="txtPassword2" placeholder="Constraseña" required autocomplete="false">
                  </div>
                </div>
                
                <div id="mensajeUsuario" class="text-center">
                  
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right" id="btnRegistrarUsuarios">Registrar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div> 
</div>

<div class="modal fade" id="modalPermisosUsuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">
           <div class="box box-primary">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="box-title">Gestión de Permisos de Roles de Usuarios</h4>
              </div>
              
                  <div class="box-body">
                      <table id="tblPermisosUsuarios" class="display compact responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <th>ROL</th>
                          <th>USUARIO</th>
                          <th>REGISTRAR</th>
                          <th>LEER</th>
                          <th>ACTUALIZAR</th>
                          <th>ELIMINAR</th>
                        </thead>                        
                   </table>
                   <div id="mensajeActPermisos" class="text-center text-success"></div>   
                  </div>
            </div>
        </div>
       </div> 
</div>

<!-- FORMULARIO PARA ACTUALIZAR USUARIO ACTUAL O EN SESSION -->
<div class="modal fade" id="modalActualizarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 class="box-title">MI PERFIL</h3>
            </div>
            
            <div class="row">
              <div class="box-body">
                <form class="form-horizontal" action="" id="formActualizarFotoUsuarios" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="hdnIdUsuario" value="<?php echo $this->session->userdata('s_idUsuario'); ?>" id="hdnIdUsuario">
                    <div class="col-md-4">
                      <div class="form-group">
                        <div class="col-sm-12" id="imgLivePreview">
                         
                          <img id="" src="<?php echo base_url('upload/').$this->session->userdata('s_foto'); ?>" class="user-image" alt="User Image" style="width: 100%">
                          
                        </div>
                        <div class="col-sm-12">
                            <input type="file" name="txtActFoto" class="form-control" id="txtActFoto" value="<?php echo $this->session->userdata('s_foto'); ?>" style="padding:0;">
                        </div>
                        <div class="col-sm-12" id="mensajeActFotoUsuario" class="text-center"></div>
                      </div>
                    </div>
                </form>
                
                  <div class="col-md-8">
                      
                      <label for="" class="col-sm-8">Documento:</label>
                      <div class="col-sm-8">
                        <input type="text" name="txtActDni" class="form-control" id="txtActDni" placeholder="Documento de Identidad" required autocomplete="off" value="<?php echo $this->session->userdata('s_dni'); ?>"  disabled >
                        <div id="registroDni"></div>
                      </div>
                      <label for="" class="col-sm-8">Nombres:</label>
                      <div class="col-sm-8">
                        <input type="text" name="txtActNombres" class="form-control" id="txtActNombres" placeholder="BUSQUE A LA PERSONA POR SU NOMBRE" autocomplete="off" value="<?php echo $this->session->userdata('s_nombre'); ?>" required disabled>
                        <input type="hidden" name="txtIdPersona" id="txtIdPersona">
                        <div id="registroNombres"></div>
                      </div>
                      <label for="cmbCargo" class="col-sm-8">Cargo:</label>
                      <div class="col-sm-8">
                        <input type="text" name="txtActCargo" class="form-control" id="txtActCargo" placeholder="Cargo" value="<?php echo $this->session->userdata('s_cargo'); ?>" required disabled>
                      </div>
                      <label for="txtActTelefonou" class="col-sm-8">Telefono o Celular</label>
                      <div class="col-sm-8">
                        <input type="text" name="txtActTelefono" class="form-control" id="txtActTelefonou" placeholder="Telefono" maxlenght="9" value="<?php echo $this->session->userdata('s_telefono'); ?>" required>
                      </div>
                      <label for="" class="col-sm-8">Usuario</label>
                      <div class="col-sm-8">
                        <input type="text" name="txtActUsuario" class="form-control" id="txtActUsuario" placeholder="usuario" value="<?php echo $this->session->userdata('s_user'); ?>" required disabled>
                      </div>
                      <label for="" class="col-sm-8">Contraseña</label>
                      <div class="col-sm-6">
                        <input type="password" name="txtActContraseña" class="form-control" id="txtActContraseña"  value="phohibido" required disabled>
                      </div>
                      <div class="col-sm-2">
                        <a id="btnObtenerClave"  class="btn btn-primary pull-right" data-toggle="modal" data-target="#modalClave">Cambiar</a>
                      </div><br>
                      <div class="col-sm-8" id="mensajeActUsuario" class="text-center"></div>
                  </div>
                </form>
              </div>
              
            </div>
            <div class="box-footer">
                Datos Personales
              </div>  
            
          </div>
        </div> 
</div>
<div class="modal fade" id="modalClave" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 class="box-title">Cambio de Contraseña</h3>
            </div>
           
              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2  control-label">Contraseña Anterior</label>
                  
                  <div class="col-sm-4">
                    <input type="text" name="txtClaveAnterior" class="form-control" id="txtClaveAnterior" placeholder="Contraseña Anterior" required autocomplete="off">
                    <div id="registroDni"></div>
                  </div>
                  <label for="" class="col-sm-2 control-label">Nueva Contraseña</label>

                  <div class="col-sm-4">
                    <input type="text" name="txtClaveNueva" class="form-control" id="txtClaveNueva" placeholder="Digite la Contraseña nueva" autocomplete="off" required>
                    
                  </div>
                <div id="mensajeActUsuarioClave"></div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right" id="btnCambiarClave">Guardar</button>
              </div>
            </div>
              <!-- /.box-footer -->
            
          </div>
        </div> 
</div>