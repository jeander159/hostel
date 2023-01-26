<?php 
	/**
	* 
	*/
	class cHabitaciones extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mHabitaciones');
			//	$this->load->library('encrypt');
		}
		public function index(){
			$data['listarHabitaciones']=$this->mHabitaciones->listarHabitaciones();
			$data['contenido']="Habitaciones/vHabitaciones";
			$this->load->view("plantilla/plantilla",$data);
			

			
		}
		public function guardar(){
			$datos['numero']=$this->input->post('txtNumHabit');
			$datos['tipo']=$this->input->post('cmbTipoHabit');
			$datos['precio']=$this->input->post('txtPrecioHabit');
			$datos['descripcion']=$this->input->post('txtDetHabit');
			$datos['piso']=$this->input->post('txtPisoHabit');
			$datos['estado']=$this->input->post('cmbEstadoHabit');
			$SH=$this->input->post('txtSH');
			$TV=$this->input->post('txtTV');
			if(empty($SH)){
				$datos['incluye']=$TV;
			}else if(empty($TV)){
				$datos['incluye']=$SH;
			}else if(empty($SH) && empty($TV)){
				$datos['incluye']="NO INCLUYE";
			}else{
				$datos['incluye']=$SH.' - '.$TV;
			}
			
			
			$registro=$this->mHabitaciones->guardar($datos);
			echo $registro;
			
		}
		public function actualizarEstadoHabitacion(){
				$id=$this->input->post('id');
				$habitacion=$this->input->post('estadoHabit');
				$columna=$this->input->post('columna');
				$habitaciones=$this->mHabitaciones->actualizarEstadoHabitacion($id,$habitacion,$columna);
				echo $habitaciones;
				// echo json_encode($nombres);
				// $data['buscarNombreCliente']=$this->mUsuario->buscarNombreCliente($nombre);
				// echo json_encode($data);
			}
		public function listarHabitaciones(){
			$datos=$this->mHabitaciones->listarHabitaciones();
			echo json_encode($datos);
		}
		public function actualizarHabitacion(){
			$id=$this->input->post('id');
			$texto=$this->input->post('texto');
			$columna=$this->input->post('columna');
			$datos=$this->mHabitaciones->actualizarHabitacion($id,$texto,$columna);
			echo $datos;
		}
	}
 ?>