<style>
  .tabla-estadistica tr td{
    border:1px solid #00C0EF !important;
  }
  
</style>
<div class="modal fade" id="modalBusquedaEstadisticasMes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">
	         <div class="box box-primary">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	              <h4 class="box-title text-center">BUSQUEDA DE ESTADISTICAS POR MES</h4>
	            </div>            
	            <div class="box-body">
                <h1 style="font-size: 4em">ESTAS ESTADISTICAS ESTAN EN MANTENIMIENTO HASTA NUEVO AVISO</h1>
                <div class="col-sm-6">
                    <label for="firstDate">DESDE:</label>
                    <input type="date" name="firstDate" class="form-control" id="firstDate">
                </div>
                <div class="col-sm-6">
                  <label for="lastDate">HASTA:</label>
                  <input type="date" name="lastDate" class="form-control" id="lastDate">
                </div>
                <h5 class="box-title text-center">CAPACIDAD DE ALOJAMIENTO OFERTADA / UTILIZADA Y TARIFAS DEL MES</h5>
                    <table class="table table-bordered table-hover tabla-estadistica">
                      <thead class="bg-aqua" style="font-size: .8em">
                        <tr>
                          <th rowspan=3 class="text-center">TIPO DE HABITACION / DEPARTAMENTO (Leer instrucciones en el reverso)</th>
                          <th colspan=3 class="text-center">CAPACIDAD DE ALOJAMIENTO OFERTADA</th>
                          <th colspan=3 class="text-center">ALOJAMIENTO UTILIZADO</th>
                          <th colspan=2 rowspan=2 class="text-center">TARIFA PUBLICA NORMAL POR DIA HOTELERO SEGUN TIPO DE HABITACION (Precio con Impuestos)(en soles S/. sin centimos)</th>
                        </tr>
                        <tr>
                          <th colspan=2 class="text-center">Numero de Habitaciones Ofertadas</th>
                          <th rowspan=2 class="text-center">Numero de "PLAZAS-CAMA"</th>
                          <th rowspan=2 class="text-center">Numero de ARRIBOS DE PERSONAS</th> 
                          <th rowspan=2 class="text-center">Numero de HABITACIONES NOCHE OCUPADAS</th> 
                          <th rowspan=2 class="text-center">Numero de PERNOCTACIONES</th> 
                        </tr>
                        <tr>
                          <th class="text-center">CON BAÑO</th> 
                          <th class="text-center">SIN BAÑO</th>  
                          <th class="text-center">CON BAÑO</th> 
                          <th class="text-center">SIN BAÑO</th> 
                        </tr>
                      </thead>
                      <tbody style="font-size: .8em">
                        <tr>
                          <td>Individuales o simples</td>
                          <td><?php foreach ($habitSimplesSshh as  $value) {
                            echo $value['count'];
                          } ?></td>
                          <td><?php foreach ($habitSimples as  $value) {
                            echo $value['count'];
                          } ?></td>
                          <td></td>
                          <td><?php foreach (($arriboPersonasSimples[0]) as  $value) {
                            echo $value;
                          } ?></td>
                          <td><?php foreach (($habitacionesOcupadasSimples[0]) as  $value) {
                            echo $value;
                          } ?></td>
                          <td><?php foreach (($pernoctacionesSimples[0]) as  $value) {
                            echo $value;
                          } ?></td>
                          
                          <td><?php foreach (($tarifaSimpleSshh[0]) as  $value) {
                            echo $value;
                          } ?></td>
                          <td><?php foreach (($tarifaSimple[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        </tr>
                        <tr>
                          <td>Dobles y matrimoniales</td>
                          <td><?php foreach ($habitMatrimonialSshh as  $value) {
                            echo $value['count'];
                          } ?></td>
                          <td><?php foreach ($habitMatrimonial as  $value) {
                            echo $value['count'];
                          } ?></td>
                          <td></td>
                          <td><?php foreach (($arriboPersonasMatrimoniales[0]) as  $value) {
                            echo $value;
                          } ?></td>
                          <td><?php foreach (($habitacionesOcupadasMatrimoniales[0]) as  $value) {
                            echo $value;
                          } ?></td>
                          
                          <td><?php foreach (($pernoctacionesMatrimoniales[0]) as  $value) {
                            echo $value;
                          } ?></td>
                          
                          <td><?php foreach (($tarifaMatrimonialSshh[0]) as  $value) {
                            echo $value;
                          } ?></td>
                          <td><?php foreach (($tarifaMatrimonial[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        </tr>
                        <tr>
                          <td>Suites(incluye sala)</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Triples</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Bungalós(casa pequeñas)</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Otras...</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td><?php foreach ($totalHabitacionesSshh as  $value) {
                            echo $value['count'];
                          } ?></td>
                          <td><?php foreach ($totalHabitacionesSinSshh as  $value) {
                            echo $value['count'];
                          } ?></td>                         
                          <td></td>
                          <td><?php foreach (($totalArriboPersonas[0]) as  $value) {
                            echo $value;
                          } ?></td>
                          <td><?php foreach (($totalHabitacionesOcupadas[0]) as  $value) {
                            echo $value;
                          } ?></td>
                          <td><?php foreach (($totalPernoctaciones[0]) as  $value) {
                            echo $value;
                          } ?></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table table-bordered table-hover tabla-estadistica">
                      <thead class="bg-aqua" style="font-size: .8em">
                        <th colspan="16" class="text-center">NUMERO DE ARRIBOS DE HUESPEDES POR DIA DEL MES</th>
                      </thead>
                      <tbody style="font-size: .8em">
                        <tr>
                        <td>Día 1</td>
                        <td><?php foreach (($arriboDia1[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 2</td>
                        <td><?php foreach (($arriboDia2[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 3</td>
                        <td><?php foreach (($arriboDia3[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 4</td>
                        <td><?php foreach (($arriboDia4[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 5</td>
                        <td><?php foreach (($arriboDia5[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 6</td>
                        <td><?php foreach (($arriboDia6[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 7</td>
                        <td><?php foreach (($arriboDia7[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 8</td>
                        <td><?php foreach (($arriboDia8[0]) as  $value) {
                            echo $value;
                          } ?></td>
                      </tr>
                      <tr>
                        <td>Día 9</td>
                        <td><?php foreach (($arriboDia9[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 10</td>
                        <td><?php foreach (($arriboDia10[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 11</td>
                        <td><?php foreach (($arriboDia11[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 12</td>
                        <td><?php foreach (($arriboDia12[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 13</td>
                        <td><?php foreach (($arriboDia13[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 14</td>
                        <td><?php foreach (($arriboDia14[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 15</td>
                        <td><?php foreach (($arriboDia15[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 16</td>
                        <td><?php foreach (($arriboDia16[0]) as  $value) {
                            echo $value;
                          } ?></td>
                      </tr>
                      <tr>
                        <td>Día 17</td>
                        <td><?php foreach (($arriboDia17[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 18</td>
                        <td><?php foreach (($arriboDia18[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 19</td>
                        <td><?php foreach (($arriboDia19[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 20</td>
                        <td><?php foreach (($arriboDia20[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 21</td>
                        <td><?php foreach (($arriboDia21[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 22</td>
                        <td><?php foreach (($arriboDia22[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 23</td>
                        <td><?php foreach (($arriboDia7[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 24</td>
                        <td><?php foreach (($arriboDia8[0]) as  $value) {
                            echo $value;
                          } ?></td>
                      </tr>
                      <tr>
                        <td>Día 25</td>
                        <td><?php foreach (($arriboDia25[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 26</td>
                        <td><?php foreach (($arriboDia26[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 27</td>
                        <td><?php foreach (($arriboDia27[0]) as  $value) {
                            echo $value;
                          } ?></td>
                        <td>Día 28</td>
                        <td><?php if(isset($arriboDia28[0])){
                          foreach (($arriboDia28[0]) as  $value) {
                            echo $value;
                          }
                        } ?></td>
                        <td>Día 29</td>
                        <td><?php if(isset($arriboDia29[0])){
                          foreach (($arriboDia29[0]) as  $value) {
                            echo $value;
                          }
                        } ?></td>
                        <td>Día 30</td>
                        <td><?php if(isset($arriboDia30[0])){
                          foreach (($arriboDia30[0]) as  $value) {
                            echo $value;
                          }
                        } ?></td>
                        <td>Día 31</td>
                        <td><?php if(isset($arriboDia31[0])){
                          foreach (($arriboDia31[0]) as  $value) {
                            echo $value;
                          }
                        } ?></td>
                        <td>TOTAL</td>
                        <td><?php foreach (($totalArriboDia[0]) as  $value) {
                            echo $value;
                          } ?></td>
                      </tr>
                      </tbody>
                    </table>
                    <h5 class="text-center">ARRIBOS Y PERNOCTACIONES SEGUN LUGAR DE RESIDENCIA DEL HUESPED</h5>
                    <div class="row">
                      <div class="col-md-6">
                        <table class="table table-bordered table-hover tabla-estadistica">
                          <thead class="bg-aqua" style="font-size: .8em">
                            <tr>
                             <th colspan="3"  class="text-center">EXTRANJEROS Y NO RESIDENTES EN EL PERU</th>                          
                           </tr>
                           <tr>
                             <th class="text-center">PAIS O CONTINENTE</th>
                             <th class="text-center">NUMERO DE ARRIBOS EN EL MES</th>
                             <th class="text-center">NUMERO DE PERNOCTACIONES EN EL MES</th>
                           </tr>
                          </thead>
                          <tbody style="font-size: .8em">

                            <?php foreach ($arriboPais as $key => $value) {?>
                              <tr>
                                <td><?php echo $value['pais']; ?></td>
                                <td><?php echo $value['sum']; ?></td>
                                <td><?php echo $value['dia']; ?></td>
                              </tr>
                            <?php }?>
                            <tr>
                              <td>TOTAL</td>
                              <?php foreach ($totalArriboPais as $key => $value) {?>
                                <td><?php echo $value['sum']; ?></td>
                                <td><?php echo $value['dia']; ?></td>                              
                            <?php }?>
                            </tr>
                          </tbody>                           
                        </table>
                      </div>
                      <div class="col-md-6">
                        <table class="table table-bordered table-hover tabla-estadistica">
                          <thead class="bg-aqua" style="font-size: .8em">
                            <tr>
                             <th colspan="3"  class="text-center">PERUANOS Y "RESIDENTES EN EL PERU"</th>                      
                           </tr>
                           <tr>
                             <th class="text-center">REGIONES</th>
                             <th class="text-center">NUMERO DE ARRIBOS EN EL MES</th>
                             <th class="text-center">NUMERO DE PERNOCTACIONES EN EL MES</th>
                           </tr>
                          </thead>
                          <tbody style="font-size: .8em">
                            <?php foreach ($arriboRegion as $key => $value) {?>
                              <tr>
                                <td><?php echo $value['region']; ?></td>
                                <td><?php echo $value['sum']; ?></td>
                                <td><?php echo $value['dia']; ?></td>
                              </tr>
                            <?php }?>
                            <tr>
                              <td>TOTAL</td>
                               <?php foreach ($totalArriboRegion as $key => $value) {?>
                                <td><?php echo $value['sum']; ?></td>
                                <td><?php echo $value['dia']; ?></td>                              
                            <?php }?>
                            </tr>
                          </tbody>                           
                        </table>
                      </div>
                      <h5 class="text-center">MOTIVO PRINCIPAL DEL VIAJE DE LOS HUÉSPEDES</h5>
                      <div class="col-md-12">
                        <table  class="table table-bordered table-hover tabla-estadistica">
                        <thead class="bg-aqua" style="font-size: .6em">
                            <th class="text-center">DETALLE</th>
                            <?php foreach ($motivosViajesExtranjeros as $key => $value) {?>                             
                              <th class="text-center"><?php echo $value['descripcion']; ?></th> 
                            <?php }?>
                        </thead>
                        <tbody style="font-size: .8em">                         
                          <tr>
                            <td>Extranjeros y no residentes</td>
                            <?php foreach ($motivosViajesExtranjeros as $key => $value) {?>
                                <td><?php echo $value['sum']; ?></td>
                            <?php }?>
                            </tr>
                          </tbody> 
                      </table>
                      </div>
                      <div class="col-md-12">
                        <table  class="table table-bordered table-hover tabla-estadistica">
                        <thead class="bg-aqua" style="font-size: .6em">
                            <th class="text-center">DETALLE</th>
                            <?php foreach ($motivosViajesPeruanos as $key => $value) {?>                             
                              <th class="text-center"><?php echo $value['descripcion']; ?></th> 
                            <?php }?>
                        </thead>
                        <tbody style="font-size: .8em">                         
                          <tr>
                            <td>Peruanos y residentes</td>
                            <?php foreach ($motivosViajesPeruanos as $key => $value) {?>
                                <td><?php echo $value['sum']; ?></td>
                            <?php }?>
                            </tr>
                          </tbody> 
                      </table>
                      </div>
                    </div>
	            </div>
	          </div>
	      </div>
       </div> 
</div>