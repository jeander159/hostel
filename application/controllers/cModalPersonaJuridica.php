<?php 
	/**
	* 
	*/
	class cModalPersonaJuridica extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mModalPersonaJuridica');
			//	$this->load->library('encrypt');
		}
		public function index(){
			$this->load->view("plantilla/plantilla",$data);
		}
		public function guardar(){
			$param['ruc_per_ju']=$this->input->post('txtRuc');
			$param['rsocial_per_ju']=$this->input->post('txtRazonSocial');
			$param['direccion_per_ju']=$this->input->post('txtDireccion');
			$param['telefono_per_ju']=$this->input->post('txtTelefono');
			$param['correo_per_ju']=$this->input->post('txtCorreo');
			
			$this->mModalPersonaJuridica->guardar($param);
			redirect('cReserva');
		}
	}
 ?>