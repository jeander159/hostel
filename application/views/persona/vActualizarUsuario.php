
<div class="row">
	<div class="col-md-6">
	          <!-- Horizontal Form -->
	
	          <div class="box box-info">
	            <div class="box-header with-border">
	              <h3 class="box-title">Actualizar Usuario</h3>
	            </div>
	            <!-- /.box-header -->
	            <!-- form start -->

	            <form action="<?php echo base_url(); ?>cUsuario/actualizar" method="POST" class="form-horizontal">
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="" class="col-sm-2 control-label">Nombres</label>

	                  <div class="col-sm-10">
	                    <input type="text" name="txtNombres" class="form-control" id="txtNombresUser" placeholder="Nombres">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputPassword3" class="col-sm-2 control-label">Apellido Paterno</label>

	                  <div class="col-sm-10">
	                    <input type="text" name="txtApellidoPat" class="form-control" id="inputPassword3" placeholder="Apellido Materno">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputPassword3" class="col-sm-2 control-label">Apellido Materno</label>

	                  <div class="col-sm-10">
	                    <input type="text" name="txtApellidoMat" class="form-control" id="inputPassword3" placeholder="Apellido Materno">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputPassword3" class="col-sm-2 control-label">Telefono</label>

	                  <div class="col-sm-10">
	                    <input type="text" name="txtTelefono" class="form-control" id="inputPassword3" placeholder="Telefono">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputPassword3" class="col-sm-2 control-label">Direccion</label>

	                  <div class="col-sm-10">
	                    <input type="text" name="txtDireccion" class="form-control" id="inputPassword3" placeholder="Direccion">
	                  </div>
	                </div>
	           
	              </div>
	              <!-- /.box-body -->
	              <div class="box-footer">
	                
	               		 <button type="submit" class="btn btn-info pull-left">Actualizar</button>
	               	
	              </div>
	              <!-- /.box-footer -->
	            </form>
			</div>
			<div class="box box-info">
	            <div class="box-header with-border">
	              <h3 class="box-title">Eliminar Usuario</h3>
	            </div>
	            <!-- /.box-header -->
	            <!-- form start -->
	            <form action="<?php echo base_url(); ?>cUsuario/eliminar" method="POST" class="form-horizontal">
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="" class="col-sm-2 control-label">ID usuario</label>

	                  <div class="col-sm-10">
	                    <input type="text" name="txtIdUsuario" class="form-control" id="txtIdUsuario" placeholder="ID USUARIO">
	                  </div>
	                </div>          
	              </div>
	              <!-- /.box-body -->
	              <div class="box-footer">	                
	               		 <button type="submit" class="btn btn-danger pull-left">Eliminar</button>
	              </div>
	              <!-- /.box-footer -->
	            </form>
			</div><!-- /.box -->
	</div>
</div>	
