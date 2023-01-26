<?php 
	/**
	* 
	*/
	class cReniec extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mReniec');
			//	$this->load->library('encrypt');
		}
		public function index(){
			$data['mensaje']="";
			$this->load->view('vReniec',$data);

		}
		public function consultaReniec(){

			
			// $dni=$this->input->post('dni');

			// require 'vendor/autoload.php';
  	// 		//crea un objeto de la clase DNI
		 // 	//$reniecDni = new Tecactus\Reniec\DNI('VkypjaDs376c2S4pewbitNgtKxxxS1E6TmwFbMGZ');
		 // 	$reniecDni = new Tecactus\Reniec\DNI('iYpaK0B1B3zoTwjHycNWDrLowjRwcFgNeZ5wNcg0');
		 // 	$data=$reniecDni->get($dni,true);
		 // 	$nombres=$data['nombres'];
		 // 	$apellidoPat=$data['apellido_paterno'];
		 // 	$apellidoMat=$data['apellido_materno'];

		 // 	$idDni=$this->mReniec->guardarDni($dni,$nombres,$apellidoPat,$apellidoMat);
			// $respuestaDni=$this->mReniec->consultarDniId($idDni);
			// echo json_encode($respuestaDni);	 	
		}

		public function consultarDni(){
			$dni=$this->input->post('dni');
			$datos=$this->mReniec->consultarDni($dni);
			echo json_encode($datos);
		}
		
	}
 ?>