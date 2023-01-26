<script>
    var baseurl="<?php echo base_url(); ?>";
</script>
<div class="modal fade" id="modalReporteUsuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">
	         <div class="box box-primary">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	              <h4 class="box-title">Reporte de Usuarios</h4>
	            </div>
	            
	                <div class="box-body">
                  		<table id="tblReporteUsuarios" class="display compact responsive nowrap" cellspacing="0" width="100%">
                  			<thead >
                          <th>ID</th>
                  				<th>CARGO</th>
                  				<th>NOMBRES</th>
                  				<th>AP. PATERNO</th>
                  				<th>AP. MATERNO</th>
                  				<th>USUARIO</th>
                  				<th>DNI</th>
                  				<th>TELEFONO</th>	                  			
                  			</thead>                  			
	             		 </table>   
	                </div>
	            
	            
	          </div>
	      </div>
       </div> 
</div>
