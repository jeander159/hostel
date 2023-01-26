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

			
			$dni=$this->input->post('dni');

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

			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => "https://apiperu.dev/api/dni/".$dni."?api_token=89948111cc8f1aa3b6d4c5efef116a8da1a1cbe3ce330d522c0fd638eda03359",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_SSL_VERIFYPEER => false
			));
			$response = curl_exec($curl);
			$err = curl_error($curl);
			curl_close($curl);
			if ($err) {
				echo json_encode("cURL Error #:" . $err);
			} else {
				echo json_decode(json_encode($response));
			}
		}

		public function consultarDni(){
			$dni=$this->input->post('dni');
			$datos=$this->mReniec->consultarDni($dni);
			echo json_encode($datos);
		}
		
	}
 ?>