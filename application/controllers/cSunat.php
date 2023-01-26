<?php 
	/**
	* 
	*/
	class cSunat extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mSunat');
			//	$this->load->library('encrypt');
		}
		public function index(){
			$data['mensaje']="";
			$this->load->view('vSunat',$data);

		}
		public function consultarSunat(){

			
			$ruc=$this->input->post('ruc');

			require 'sunat/vendor/autoload.php';
  			
		 	$sunatRuc = new Tecactus\Sunat\RUC('iYpaK0B1B3zoTwjHycNWDrLowjRwcFgNeZ5wNcg0');
		 	$data=$sunatRuc->getByRuc($ruc, true);
		 	
		 	$razonSocial=$data['razon_social'];
		 	$direccion=$data['direccion'];
		 	// $razonSocial="razon social";
		 	// $direccion="direccion";	 	

		 	$idRuc=$this->mSunat->guardarRuc($ruc,$razonSocial,$direccion);
		 	$respuestaRuc=$this->mSunat->consultarRucId($idRuc);
			echo json_encode($respuestaRuc);
		 	
		 	
		}
		public function consultarRuc(){
			$ruc=$this->input->post('ruc');
			$datos=$this->mSunat->consultarRuc($ruc);
			echo json_encode($datos);
		}		
	}
 ?>