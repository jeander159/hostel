<?php 
	/**
	* 
	*/
	class cIngresos extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mIngresos');
			//	$this->load->library('encrypt');
		}
		public function index(){
			
			

			
		}
		public function guardar(){
			
			$datos['concepto_id']=$this->input->post('cmbTipoIngresos');
			$datos['monto']=$this->input->post('txtMontoIngresos');
			$datos['cantidad']=$this->input->post('txtCantidadIngresos');
			$datos['descripcion']=$this->input->post('txtDescripcionIngresos');
			$datos['fecha']=$this->input->post('txtFechaIngresos');
						
			$registro=$this->mIngresos->guardar($datos);
			echo $registro;
			// echo json_encode($datos);
			
		}

		public function obtenerConceptos(){
			$Conceptos=$this->mIngresos->obtenerConceptos();
			echo json_encode($Conceptos);
		}
		public function listarIngresos(){
			$datos=$this->mIngresos->listarIngresos();
			echo json_encode($datos);
		}
		public function actualizarIngresos(){
			$id=$this->input->post('id');
			$texto=$this->input->post('texto');
			$columna=$this->input->post('columna');
			$datos=$this->mIngresos->actualizarIngresos($id,$texto,$columna);
			echo $datos;
		}
	}
 ?>