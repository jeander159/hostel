<script>
    var baseurl="<?php echo base_url(); ?>";
</script>
<div class="modal fade" id="modalReporteReservas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">
	         <div class="box box-primary">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	              <h4 class="box-title">Reporte de Reservas de Habitaciones</h4>
	            </div>
	            
	                <div class="box-body">
                  		<table id="tblReporteReservas" class="display compact responsive nowrap" cellspacing="0" width="100%">
                  			<thead style="font-size: .8em">
                          <th>ID</th>
                  				<th>CLIENTE</th>
                  				<th>CIUDAD</th>
                  				<th>PAIS</th>                  				
                  				<th>HABITACION</th>
                  				<th>NUMERO</th>                  				                  			
                  				<th>PAGO</th>                  				                  			
                  				<th>FECHA INGRESO</th>                  				                  			
                          <th>FECHA SALIDA</th>                                                 
                          <th>USUARIO</th>
                          <th>HORA</th>                                                  
                          <th>ESTADO</th>                                                 
                  				                  				                  			
                  			</thead>                  			
	             		 </table> 
                   <div id="mensajeReporteReserva"></div>  
	                </div>
	            
	            
	          </div>
	      </div>
       </div> 
</div>