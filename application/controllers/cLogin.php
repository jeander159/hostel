<?php 
	/**
	* 
	*/
	class cLogin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mLogin');
			$this->load->library('upload');
		}
		public function index(){
			$data['mensaje']="";
			$this->load->view('vLogin',$data);

		}
		public function ingresar(){
			$usu=$this->input->post('txtUsuario');
			$pass=$this->input->post('txtClave');

			$res=$this->mLogin->ingresar($usu,$pass);
			if($res==1){
				redirect(base_url('cPrincipal'));	
			}else{
				$data['mensaje']="Usuario o contraseña erronea";
				$this->load->view('vLogin',$data);
			}
		}
		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url());
		}
	}
 ?>