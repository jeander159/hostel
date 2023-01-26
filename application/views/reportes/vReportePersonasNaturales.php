<script>
    var baseurl="<?php echo base_url(); ?>";
</script>
<div class="modal fade" id="modalReportePersonasNaturales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">
	         <div class="box box-primary">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	              <h4 class="box-title">Reporte de Personas</h4>
	            </div>
	            
	                <div class="box-body">
                  		<table id="tblReportePersonasNaturales" class="display compact responsive nowrap" cellspacing="0" width="100%">
                  			<thead >
                  				<th>ID</th>
                  				<th>DOCUMENTO</th>
                  				<th>NUMERO</th>
                  				<th>NOMBRES</th>                  				
                  				<th>APE. PATERNO</th>                  				
                  				<th>APE. MATERNO</th>                  				
                  				<th>RAZON SOCIAL</th>                  				
                  				<th>EST. CIVIL</th>                  				                  			
                  			</thead>                  			
	             		 </table>
	             		 <div id="mensajeActPersona" class="text-center text-success"></div>   
	                </div>
	            
	            
	          </div>
	      </div>
       </div> 
</div>
