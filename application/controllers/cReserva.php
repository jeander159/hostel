<?php 
	/**
	* 
	*/
	class cReserva extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mReserva');
			//	$this->load->library('encrypt');
		}
		public function index(){
			
			$data['contenido']="vReserva";
			$this->load->view("plantilla/plantilla",$data);	
		}
		public function guardarReserva(){
				
				//datos del huesped
				$datosHuesped['profesion']=strtoupper($this->input->post('txtProfesion'));
				$datosHuesped['id_persona']=$this->input->post('txtIdPersonaNatural');
				$datosHuesped['id_region']=$this->input->post('cmbRegion');
				//DATOS DE RESERVA
				$datosHabitacion['cantidad_personas']=$this->input->post('txtPersonas');
				$datosHabitacion['fecha_ingreso']=$this->input->post('txtFechaIngreso');
				$datosHabitacion['fecha_salida']=$this->input->post('txtFechaSalida');
				$datosHabitacion['id_usuario']=$this->input->post('txtIdUser');
				$datosHabitacion['id_habitacion']=$this->input->post('txtIdHabit');
				$datosHabitacion['hora']=$this->input->post('txtHoraIngreso');
				$datosHabitacion['destino']=strtoupper($this->input->post('txtDestino'));
				$datosHabitacion['estado']=1;
				//DATOS DEPAGO
				$datosPago['monto']=$this->input->post('txtMontoTotal');
				$datosPago['descuento']=$this->input->post('txtDescuento');
				$datosPago['fecha']=$this->input->post('txtFechaPago');
				$datosPago['id_motivo']=$this->input->post('txtIdMotivo');

				$idHuesped=$this->mReserva->guardarHuesped($datosHuesped);
				$idPago=$this->mReserva->guardarPago($datosPago);

				if(!empty($idHuesped) || !empty($idPago)){

					$datosHabitacion['id_pago']=$idPago;
					$datosHabitacion['id_huesped']=$idHuesped;
					$reserva=$this->mReserva->guardarReserva($datosHabitacion);
					echo $reserva;
				}

				
			}
		public function listarReservas(){
			$datos=$this->mReserva->listarReservas();
			
			echo json_encode($datos);
		}
		public function getFecha(){
			
			$fechaDesde=$this->input->post('fechaDesde');
			$fechaHasta=$this->input->post('fechaHasta');
			$registro=$this->mReserva->getFecha('administracion.reservas',$fechaDesde,$fechaHasta);
			echo json_encode($registro);

		}
		public function buscarMotivoViaje(){
			$motivo=$this->input->post('motivo');
			$registro=$this->mReserva->buscarMotivoViaje($motivo);
			echo json_encode($registro);
		}
		public function obtenerNumReservas(){
			$numReservas=$this->mReserva->obtenerNumReservas();
			echo json_encode($numReservas);
		}
		public function anularReserva(){
			$idReserva=$this->input->post('idReserva');
			$estado=$this->input->post('estado');
			if($estado==1){
				$estado=0;
				$reserva=$this->mReserva->anularReserva($idReserva,$estado);
				echo $idReserva;
			}else{
				$estado=1;
				$reserva=$this->mReserva->anularReserva($idReserva,$estado);
				echo $idReserva;	
			}

		}
		public function estadisticasMes(){
			$firstDate=$this->input->post('firstDate');
			$lastDate=$this->input->post('lastDate');
			
			//Obtener numero de habitaciones ofertadas con baño
			$habitSimplesSshh=$this->mReserva->obtenerHabitSimpleOferSshh();
			foreach ($habitSimplesSshh as $value) {
				$estadisticas['habitSimplesSshh']=$value['count'];
			}
			$habitMatrimonialSshh=$this->mReserva->obtenerHabitMatrimonialOferSshh();
			foreach ($habitMatrimonialSshh as $value) {
				$estadisticas['habitMatrimonialSshh']=$value['count'];
			}
			$totalHabitacionesSshh=$this->mReserva->obtenerTotalHabitacionesSshh();
			foreach ($totalHabitacionesSshh as  $value) {
                $estadisticas['totalHabitacionesSshh']= $value['count'];
            }
			//Obtener numero de habitaciones ofertadas con baño
			$habitSimples=$this->mReserva->obtenerHabitSimpleOfer();
			foreach ($habitSimples as  $value) {
                $estadisticas['habitSimples']=$value['count'];
            }
			$habitMatrimonial=$this->mReserva->obtenerHabitMatrimonialOfer();
			foreach ($habitMatrimonial as  $value) {
                $estadisticas['habitMatrimonial']=$value['count'];
            }
			$totalHabitacionesSinSshh=$this->mReserva->obtenerHabitacionesOfer();
			foreach ($totalHabitacionesSinSshh as  $value) {
                $estadisticas['totalHabitacionesSinSshh']=$value['count'];
            }


			$tarifaSimpleSshh=$this->mReserva->obtenerTarifaSimpleSshh();
			foreach (($tarifaSimpleSshh[0]) as  $value) {
                $estadisticas['tarifaSimpleSshh']= $value;
            }
			$tarifaMatrimonialSshh=$this->mReserva->obtenerTarifaMatrimonialSshh();
			foreach (($tarifaMatrimonialSshh[0]) as  $value) {
                $estadisticas['tarifaMatrimonialSshh']=$value;
            }
			$tarifaSimple=$this->mReserva->obtenerTarifaSimple();
			foreach (($tarifaSimple[0]) as  $value) {
                $estadisticas['tarifaSimple']=$value;
            }
			$tarifaMatrimonial=$this->mReserva->obtenerTarifaMatrimonial();
			foreach (($tarifaMatrimonial[0]) as  $value) {
                $estadisticas['tarifaMatrimonial']=$value;
            }	
           	//DESDE ACA ES CON BUSQEUDA POR FECHAS 
			//OBTENER EL ARRIBO DE PERSONAS DURANTE EL MES
			$arriboPersonasSimples=$this->mReserva->obtenerArriboPersonasSimples();
			foreach (($arriboPersonasSimples[0]) as  $value) {
                $estadisticas['arriboPersonasSimples']=$value;
            }
			$arriboPersonasMatrimoniales=$this->mReserva->obtenerArriboPersonasMatrimoniales();
			foreach (($arriboPersonasMatrimoniales[0]) as  $value) {
                $estadisticas['arriboPersonasMatrimoniales']=$value;
            }
			$totalArriboPersonas=$this->mReserva->obtenerTotalArriboPersonas();
			foreach (($totalArriboPersonas[0]) as  $value) {
                $estadisticas['totalArriboPersonas']=$value;
            }
			//obtener el numero de habitaciones noche ocupadas
			$habitacionesOcupadasSimples=$this->mReserva->obtenerHabitacionesOcupadasSimples();
			foreach (($habitacionesOcupadasSimples[0]) as  $value) {
                $estadisticas['habitacionesOcupadasSimples']=$value;
            }
			$habitacionesOcupadasMatrimoniales=$this->mReserva->obtenerHabitacionesOcupadasMatrimoniales();
			foreach (($habitacionesOcupadasMatrimoniales[0]) as  $value) {
                $estadisticas['habitacionesOcupadasMatrimoniales']=$value;
            }
			$totalHabitacionesOcupadas=$this->mReserva->obtenerTotalHabitacionesOcupadas();
			foreach (($totalHabitacionesOcupadas[0]) as  $value) {
                $estadisticas['totalHabitacionesOcupadas']=$value;
            }
			//obtner numero de arribo por dia
			
			// $mes=date('m');
			// $year=date('Y');
			// $lastDia=date('d',mktime(0,0,0,$mes+1,0,$year));
			// $firstDia=date('d',mktime(0,0,0,$mes,1,$year));

			$newFechaFirst=explode('-',$firstDate);
			$newFechaLast=explode('-',$lastDate);
			
			$totalDias=$newFechaLast[2]-$newFechaFirst[2];
			
			for($i=1;$i<=$totalDias;$i++){
				$estadisticas['arriboDia'.$i]=$this->mReserva->obtenerArriboDia($dia=($i<10)?'0'.$i:$i);	
			}
						
							
			$estadisticas['totalArriboDia']=$this->mReserva->obtenerTotalArriboDia();
			//obtener numero pernoctaciones	
			$estadisticas['pernoctacionesSimples']=$this->mReserva->obtenerPernoctacionesSimples();
			$estadisticas['pernoctacionesMatrimoniales']=$this->mReserva->obtenerPernoctacionesMatrimoniales();
			$estadisticas['totalPernoctaciones']=$this->mReserva->obtenerTotalNumeroPernoctacionesSimples();

			//obtener numero de arribos por nacionalidad en un mes
			$estadisticas['arriboPais']=$this->mReserva->obtenerArriboPais();
			$estadisticas['totalArriboPais']=$this->mReserva->obtenerTotalArriboPais();
			$estadisticas['arriboRegion']=$this->mReserva->obtenerArriboRegion();
			$estadisticas['totalArriboRegion']=$this->mReserva->obtenerTotalArriboRegion();

			$estadisticas['motivosViajesExtranjeros']=$this->mReserva->ObtenerMotivosViajesExtranjeros();
			$estadisticas['motivosViajesPeruanos']=$this->mReserva->ObtenerMotivosViajesPeruanos();
			echo json_encode($estadisticas);
		}
	}
 ?>