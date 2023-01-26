<?php 
	/**
	* 
	*/
	class cUbigeo extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mUbigeo');
			//	$this->load->library('encrypt');
		}
		public function index(){
			
		}

		public function listarPaises(){

			$pais=$this->input->post('pais');
			$paises=$this->mUbigeo->listarPaises($pais);
			echo json_encode($paises);		
		}
		public function listarRegiones(){

			$idPais=$this->input->post('idPais');
			$regiones=$this->mUbigeo->listarRegiones($idPais);
			echo json_encode($regiones);		
		}

		
	}
 ?>