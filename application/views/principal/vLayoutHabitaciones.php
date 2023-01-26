
     <div class="row">
      <h1 class="box-title col-md-12 text-center"><legend>CONTROL DE LAS HABITACIONES</legend></h1>
      
      <?php foreach ($listarHabitaciones as $value): ?>
        <?php $idHabit='idHabit'.$value->id_habitacion; ?>
        <?php $numHabit='numHabit'.$value->id_habitacion; ?>
        <?php $tipoHabit='tipoHabit'.$value->id_habitacion; ?>
        <?php $estadoHabit='estadoHabit'.$value->id_habitacion;?>
        <?php $pisoHabit='pisoHabit'.$value->id_habitacion;?>
        <?php $divHabit='divHabit'.$value->id_habitacion;?>
        <?php $precioHabit='precioHabit'.$value->id_habitacion;?>
        
        
        <div id="boxHabit" class="col-lg-3 col-xs-6">

          
          <!-- small box -->
          <?php if(($value->estado)=="OCUPADO"){ ?>
              <div class="small-box bg-red">
          <?php } ?>
           <?php if(($value->estado)=="DISPONIBLE"){ ?>
              <div class="small-box bg-green">
          <?php } ?>
           <?php if(($value->estado)=="MANTENIMIENTO"){ ?>
              <div class="small-box bg-yellow">
          <?php } ?>
          <?php if(($value->estado)=="PENDIENTE"){ ?>
              <div class="small-box bg-aqua">
          <?php } ?>
            <div class="inner">
              <?php $nomPer='txtNombrePersona'.$value->id_habitacion ?>
            <span type="text" id="<?=$nomPer?>" style="text-align: center;position: absolute;top:-2px;left:50%;transform: translateX(-50%);width: 100%;"> </span>
              <?php $id='numHabit'.$value->id_habitacion ?>
              <h3><?php echo $value->numero; ?></h3>

              <input type="hidden" name="" id="<?php echo $numHabit; ?>" value="<?php echo $value->numero; ?>">
              <p><?php echo $value->tipo; ?></p>
              <input type="hidden" name="" id="<?php echo $tipoHabit; ?>" value="<?php echo $value->tipo; ?>">
              <input type="hidden" name="" id="<?php echo $idHabit; ?>" value="<?php echo $value->id_habitacion; ?>">
              <input type="hidden" name="" id="<?php echo $pisoHabit; ?>" value="<?php echo $value->piso; ?>">
              <input type="hidden" name="" id="<?php echo $precioHabit; ?>" value="<?php echo $value->precio; ?>">
            </div>
            <div class="icon">
              <i class="ion ion-person-add"><span style="font-size: .2em;color:white"> <?php echo "S/.".$value->precio; ?></span></i>
            </div>
            <h4 href="#" class="small-box-footer" id="txtEstadoHabitacion" style="font-weight:bold;margin:0;background: none"><?php echo $value->estado; ?></i></h4>
            <div class="small-box-footer" style="padding:1em 0;cursor: pointer;display: block" id="<?php echo $divHabit; ?>">
              
            </div>
            
            <input type="hidden" name="" id="<?php echo $estadoHabit; ?>" value="<?php echo $value->estado; ?>">
          </div>
        </div>
      <?php endforeach ?> 
      
     </div>






