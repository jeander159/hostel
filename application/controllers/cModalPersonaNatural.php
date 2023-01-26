	<?php 
		/**
		* 
		*/
		class cModalPersonaNatural extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				$this->load->model('mModalPersonaNatural');
				//	$this->load->library('encrypt');
			}
			public function index(){

				$this->load->view("plantilla/plantilla",$data);
				
			}
			public function guardar(){
				$param['dni_per']=$this->input->post('txtDni');
				$param['nombres_per']=strtoupper($this->input->post('txtNombres'));
				$param['apellido_pat_per']=strtoupper($this->input->post('txtApellidoPat'));
				$param['apellido_mat_per']=strtoupper($this->input->post('txtApellidoMat'));
				$param['direccion_per']=$this->input->post('txtDireccion');
				$param['telefono_per']=$this->input->post('txtTelefono');
				$param['fecha_nac_per']=$this->input->post('txtFechaNac');
				$param['correo_per']=$this->input->post('txtCorreo');

				$this->mModalPersonaNatural->guardar($param);
				redirect('cReserva');
			}
		}
	 ?>