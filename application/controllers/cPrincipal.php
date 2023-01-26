<?php 
	/**
	* 
	*/
	class cPrincipal extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mLogin');
			$this->load->model('mReserva');
			
		}
		public function index(){
			$ide=$this->input->post();
				$data['listarHabitaciones']=$this->mLogin->listarHabitaciones();
				//Obtener numero de habitaciones ofertadas con baño
				$estadisticas['habitSimplesSshh']=$this->mReserva->obtenerHabitSimpleOferSshh();
				$estadisticas['habitMatrimonialSshh']=$this->mReserva->obtenerHabitMatrimonialOferSshh();
				$estadisticas['totalHabitacionesSshh']=$this->mReserva->obtenerTotalHabitacionesSshh();
				//Obtener numero de habitaciones ofertadas con baño
				$estadisticas['habitSimples']=$this->mReserva->obtenerHabitSimpleOfer();
				$estadisticas['habitMatrimonial']=$this->mReserva->obtenerHabitMatrimonialOfer();
				$estadisticas['totalHabitacionesSinSshh']=$this->mReserva->obtenerHabitacionesOfer();


				$estadisticas['tarifaSimpleSshh']=$this->mReserva->obtenerTarifaSimpleSshh();
				$estadisticas['tarifaMatrimonialSshh']=$this->mReserva->obtenerTarifaMatrimonialSshh();
				$estadisticas['tarifaSimple']=$this->mReserva->obtenerTarifaSimple();
				$estadisticas['tarifaMatrimonial']=$this->mReserva->obtenerTarifaMatrimonial();

				//OBTENER EL ARRIBO DE PERSONAS DURANTE EL MES
				$estadisticas['arriboPersonasSimples']=$this->mReserva->obtenerArriboPersonasSimples();
				$estadisticas['arriboPersonasMatrimoniales']=$this->mReserva->obtenerArriboPersonasMatrimoniales();
				$estadisticas['totalArriboPersonas']=$this->mReserva->obtenerTotalArriboPersonas();
				//obtener el numero de habitaciones noche ocupadas
				$estadisticas['habitacionesOcupadasSimples']=$this->mReserva->obtenerHabitacionesOcupadasSimples();
				$estadisticas['habitacionesOcupadasMatrimoniales']=$this->mReserva->obtenerHabitacionesOcupadasMatrimoniales();
				$estadisticas['totalHabitacionesOcupadas']=$this->mReserva->obtenerTotalHabitacionesOcupadas();
				//obtner numero de arribo por dia
				
				$mes=date('m');
				$year=date('Y');
				$lastDia=date('d',mktime(0,0,0,$mes+1,0,$year));
				$firstDia=date('d',mktime(0,0,0,$mes,1,$year));
				$totalDias=$lastDia-$firstDia+1;

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

				// foreach ($arribo as $i => $value) {
				// 	$value['pais']=[$value['pais'].$value['sum']] ;
				// 	print_r($value['pais']);
				// }
				// return false;
				// $estadisticas['arriboDia2']=$this->mReserva->obtenerArriboDia($dia='02');
				// $estadisticas['arriboDia3']=$this->mReserva->obtenerArriboDia($dia='03');

				$data['contenido']="principal/vLayoutHabitaciones";
				$this->load->view("persona/vUsuario");
				
				$this->load->view("vReserva");
				$this->load->view("persona/vPersonaNatural");
				$this->load->view("persona/vPersonaJuridica");
				$this->load->view("habitaciones/vHabitaciones");
				$this->load->view("reportes/vReporteUsuarios");
				$this->load->view("reportes/vReportePersonasNaturales");
				$this->load->view("reportes/vReportePersonasJuridicas");
				$this->load->view("reportes/vReporteHabitaciones");
				$this->load->view("reportes/vReporteReservas");
				$this->load->view("reportes/vEstadisticasMes",$estadisticas);
				$this->load->view("reportes/vBusquedaEstadisticasMes");
				$this->load->view("ingresos/vIngresos");
				$this->load->view("reportes/vReporteIngresos");
				$this->load->view("reportes/vReporteBusquedaReservas");
				$this->load->view("plantilla/plantilla",$data);

		}
	}
 ?>

