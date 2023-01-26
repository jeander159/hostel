<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('upload/').$this->session->userdata('s_foto'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo strtoupper($this->session->userdata('s_user')); ?></p>
          
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU DE NAVEGACIÓN</li>
        
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>USUARIOS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if ($this->session->userdata('s_registrar')==1): ?>
                <li class="active"><a href="" data-toggle="modal" data-target="#modalUsuario"><i class="fa fa-circle-o"></i>Registro Usuarios</a></li>
            <?php endif ?>
            
            <?php if ($this->session->userdata('s_idCargo')==1): ?><li class="active"><a href="" data-toggle="modal" data-target="#modalReporteUsuarios"><i class="fa  fa-list-alt"></i>Reporte de Usuarios</a></li>
            
            <li class="active"><a href="" data-toggle="modal" data-target="#modalPermisosUsuarios"><i class="fa  fa-list-alt"></i>Permisos</a></li>
            <?php endif ?>
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>PERSONAS</span>
          </a>
          <ul class="treeview-menu">
            <?php if ($this->session->userdata('s_registrar')==1): ?>
            <li><a href="" data-toggle="modal" data-target="#modalRegistrarPersona"> <i class="fa fa-circle-o"></i> Registrar Personas</a></li>
            <?php endif ?>
            
            <li class="active"><a href="" data-toggle="modal" data-target="#modalReportePersonasNaturales"><i class="fa  fa-list-alt"></i>Reporte de Personas</a></li>  
             
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>HABITACIONES</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if ($this->session->userdata('s_registrar')==1): ?>
            <li><a href="" data-toggle="modal" data-target="#modalRegistrarHabitaciones"> <i class="fa fa-circle-o"></i> Registrar Habitacion</a></li>
            <?php endif ?>
            <li><a href="" data-toggle="modal" data-target="#modalReporteHabitaciones"><i class="fa fa-circle-o"></i> Reporte de Habitaciones</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>RESERVA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="" data-toggle="modal" data-target="#modalReporteReservas"><i class="fa fa-circle-o"></i>Reporte de Reservas</a></li>
            <li><a href="" data-toggle="modal" data-target="#modalReporteBusquedaReservas"><i class="fa fa-circle-o"></i>Busqueda de Reservas</a></li>
            <li><a href="" data-toggle="modal" data-target="#modalEstadisticasMes"><i class="fa fa-circle-o"></i>Estadisticas del Mes</a></li>
            <li><a href="" data-toggle="modal" data-target="#modalBusquedaEstadisticasMes"><i class="fa fa-circle-o"></i>Busqueda de Estadisticas</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>VENTAS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="" data-toggle="modal" data-target="#modalRegistrarIngresos"><i class="fa fa-circle-o"></i> Registrar Ventas</a></li>
            <li><a href="" data-toggle="modal" data-target="#modalReporteIngresos"><i class="fa fa-circle-o"></i>Reporte de Ventas</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content">


    


