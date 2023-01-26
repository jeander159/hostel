<script>
    var baseurl="<?php echo base_url(); ?>";
    var actualizar=<?=$this->session->userdata('s_actualizar');?>;
</script>
<div class="modal fade" id="modalReporteHabitaciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">
	         <div class="box box-primary">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	              <h4 class="box-title">Reporte de Habitaciones</h4>
	            </div>
	            
	                <div class="box-body">
                  		<table id="tblReporteHabitaciones" class="display compact responsive nowrap" cellspacing="0" width="100%">
                  			<thead >
                  				<th>ID</th>
                  				<th>N° HABIT.</th>
                  				<th>TIPO</th>                  				
                  				<th>PRECIO S/.</th>
                  				<th>DETALLES</th>                  				                  			
                  				<th>PISO</th>                  				                  			
                  				<th>ESTADO</th>                  				                  			
                  			</thead>                  			
	             		 </table>
                   <div id="mensajeActHabit" class="text-center text-success"></div>   
	                </div>
	            
	            
	          </div>
	      </div>
       </div> 
</div>