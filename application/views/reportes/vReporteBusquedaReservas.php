<script>
    var baseurl="<?php echo base_url(); ?>";
</script>
<div class="modal fade" id="modalReporteBusquedaReservas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">
	         <div class="box box-primary">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	              <h4 class="box-title">Reporte de Reservas de Habitaciones</h4>
	            </div>
	             <div class="col-md-12">
                  <div class="col-sm-2">
                    
                        <label for="" class="text-right">BUSQUEDA:</label>
                   
                  </div>
                  <div class="col-sm-3">
                    
                        <input type="date" class="form-control" name="fechaDesde" id="fechaDesde">
                    
                  </div>
                  <div class="col-sm-3">
                   
                        <input type="date" class="form-control" name="fechaHasta" id="fechaHasta">
                    </div> 
               </div>
	                <div class="box-body">
                  		<table  class="display compact responsive nowrap table table-bordered table-hover" cellspacing="0" width="100%">
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
                  				<th>ESTADO</th>                  				                  			
                  			</thead>
                        <tbody id="tblReporteBusquedaReservas">
                          
                        </tbody>                  			
	             		 </table> 
                   <div id="mensajeReporteBusquedaReserva"></div>  
	                </div>
	          </div>
	      </div>
       </div> 
</div>